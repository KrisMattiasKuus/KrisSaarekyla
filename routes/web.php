<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
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
    ]);

    $throttleKey = $request->ip() . $request->userAgent();
    if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
        throw new ThrottleRequestsException('Too many attempts');
    }
    Mail::to(env('SUPPORT_EMAIL'))->send(new ContactMail($validated));
    return Inertia::render('Contact', ["success" => "Edukalt saadetud kiri!", "fail" => null]);
})->name('contact.send');

Route::get("/annetus", function () {
    return Inertia::render("Donate");
})->name('donate');

Route::get("/toode/{id}", function ($id) {
    return Inertia::render("Product", ['id' => $id]);
})->name('product');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
