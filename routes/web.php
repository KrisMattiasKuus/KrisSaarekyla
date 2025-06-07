<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm as ContactMail;
use Illuminate\Http\Exceptions\ThrottleRequestsException;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get("/pood", function () {
    return Inertia::render("Store");
})->name('shop');

Route::get("/kontakt", function () {
    return Inertia::render("Contact", ["success" => null, "fail" => null]);
})->name('contact');

Route::post("/kontakt", function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
        'phone' => 'nullable|string|max:20',
    ]);

    $throttleKey = $request->ip() . $request->userAgent();
    if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
        throw new ThrottleRequestsException('Too many attempts');
    }
    
    Mail::to(env('SUPPORT_EMAIL', 'Kaspar.Martin.Suursalu@tptlive.ee'))->send(new ContactMail($validated['name'], $validated['email'], $validated['phone'] ?? null, $validated['message']));
    return Inertia::render('Contact', ["success" => "Edukalt saadetud kiri!", "fail" => null]);
})->name('contact.send');

Route::get("/annetus", function () {
    return Inertia::render("Donate");
})->name('donate');

Route::get("/toode/{id}", function ($id) {
    return Inertia::render("Product", ['id' => $id]);
})->name('product');

Route::get('/admin/home', function () {
    $products = \App\Models\Product::all();
    return Inertia::render('admin/Home', ['products' => $products]);
})->name('admin.index');

Route::post('/admin/product', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string|max:1000',
        'image' => 'nullable|image|max:2048',
    ]);

    $product = new \App\Models\Product($validated);
    if ($request->hasFile('image')) {
        $product->image = $request->file('image')->store('products', 'public');
    }
    $product->save();

    return redirect()->route('admin.index');
})->name('admin.products.store');

Route::put('/admin/product/update', function (Request $request) {
    $validated = $request->validate([
        'id' => 'required|exists:products,id',
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string|max:1000',
        'image' => 'nullable|image|max:2048',
    ]);

    $product = \App\Models\Product::findOrFail($validated['id']);
    $product->fill($validated);
    if ($request->hasFile('image')) {
        $product->image = $request->file('image')->store('products', 'public');
    }
    $product->save();

    return redirect()->route('admin.index');
})->name('admin.products.update');

Route::delete('/admin/product/delete', function (Request $request) {
    $validated = $request->validate([
        'id' => 'required|exists:products,id',
    ]);

    $product = \App\Models\Product::findOrFail($validated['id']);
    $product->delete();

    return redirect()->route('admin.index');
})->name('admin.products.destroy');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
