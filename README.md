# Laravel Docker Template (PHP 8.2 + Local MySQL)

This is a lightweight Laravel 10 development environment using **Docker for PHP** and **MySQL from your local machine**.  
You don't need to install PHP or Composer on your host system.

The app runs via `php artisan serve` inside the container and connects to your **locally installed MySQL**.

---

## ✅ Features

- Laravel 10 with PHP 8.2 (Dockerized)
- Uses `php artisan serve` (no Nginx needed)
- Connects to local MySQL (e.g. XAMPP, MAMP, Homebrew, etc.)
- Devs can define their own port using `.env`
- Great for teams with multiple developers

---

## ⚙️ Getting Started

### 1. Clone the project

```bash
git clone <REPO_URL> laravel-docker
cd laravel-docker
