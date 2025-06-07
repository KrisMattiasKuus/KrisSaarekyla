# Saareküla Tuulik Web App

This is a modern web application for the **Saareküla Vaike Tuulik** project. It uses a full-stack JavaScript and PHP architecture, providing a smooth single-page application experience with Laravel, Vue.js, and Inertia.js.

---

## 🧰 Technologies Used

- **[Laravel](https://laravel.com/)** — PHP backend framework for routing, database, and API logic.
- **[Vue.js 3](https://vuejs.org/)** — Reactive frontend JavaScript framework.
- **[Inertia.js](https://inertiajs.com/)** — Bridges Laravel and Vue into a single-page app without an API.
- **[Tailwind CSS](https://tailwindcss.com/)** — Utility-first CSS framework for rapid UI development.
- **[Bun](https://bun.sh/)** — Lightning-fast JavaScript bundler and package manager.

---

## 🚀 Local Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/krismartias/saare-tuulik.git
cd saare-tuulik
```

### 2. Install PHP Dependencies
Ensure you have PHP 8.1+ and Composer installed. Then run:

```bash
composer install
```

### 3. Setup Environment File
```bash
cp .env.example .env
```
Update the .env file with your database credentials and mail settings (especially SUPPORT_EMAIL for contact form).

Then generate the application key:

```bash
php artisan key:generate
```
### 4. Set Up the Database
Make sure your database is created and configured correctly in .env, then run:

```bash
php artisan migrate
```

### 5. Install Frontend Dependencies
Ensure you have Bun installed and install dependencies:

```bash
bun install
```
Then run the frontend development server:

```bash
bun run dev
```

### 6. Serve the Application
To start the Laravel server:

```bash
php artisan serve
```
Visit http://localhost:8000


---

### Admin Panel Access

To access the panel, you must visit the route
```bash
http://localhost:8000/login
```

Here you will need to sign up with an account and the. you'll be redirected to the control panel.
