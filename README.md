# URL Shortener Assignment

This project is a URL shortening service built using **Laravel 10+**, implementing role-based access control, company grouping, and restricted URL visibility rules.

---

## 🚀 Project Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/mdmaskuralam/your-repo-name.git
cd your-repo-name
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Create environment file

```bash
cp .env.example .env
```

### 4. Generate APP_KEY

```bash
php artisan key:generate
```

### 5. Configure Database

Update `.env` with MySQL or SQLite configuration.

For SQLite:

```bash
touch database/database.sqlite
```

### 6. Run migrations & seeders

```bash
php artisan migrate --seed
```

> This will automatically create the **SuperAdmin** user using raw SQL (as required).

### 7. Start the development server

```bash
php artisan serve
```

---

## 🔐 Authentication & Authorization

* Five predefined roles:
  **SuperAdmin, Admin, Member, Sales, Manager**
* SuperAdmin is created via Seeder
* Laravel Breeze / Sanctum / Jetstream can be used for authentication
* Users can log in and log out

---

## 👥 Invitation Rules

* **SuperAdmin cannot invite Admin in a new company**
* **Admin cannot invite another Admin or Member in their own company**

---

## 🔗 URL Shortener Rules

* Admin **cannot** create short URLs
* Member **cannot** create short URLs
* SuperAdmin **cannot** create short URLs
* SuperAdmin **cannot** see all URLs
* Admin can **only see URLs NOT created inside their company**
* Member can **only see URLs NOT created by themselves**
* Short URLs are **not publicly resolvable** (no public redirect route)
* Only authenticated users can access and resolve URLs

---

## ✅ Tests Included

* Admin/Member cannot create URLs
* SuperAdmin cannot create URLs
* Admin sees only URLs outside their company
* Member sees only URLs not created by themselves
* Short URLs are protected from public access

---

## 📦 Tech Stack

* **Laravel 10+**
* **MySQL or SQLite**
* **Blade (simple HTML, no CSS needed)**
* **Laravel Auth Scaffolding**

---

## 📁 Folder Structure (Important)

```
app/
├── Models/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
routes/
│   ├── web.php
database/
│   ├── migrations/
│   ├── seeders/
resources/
│   ├── views/
```

---

## 📝 Notes

* You are free to improve UI if you want.
* Authentication scaffolding (Jetstream / Breeze) is allowed.
* Mockups provided in the assignment are only references.

---

## 👤 SuperAdmin Credentials (Seeder)

```
Email: superadmin@example.com
Password: password
```

---

## 📜 License

This project is for educational and assignment use.
