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
```

### 2. Copy .env and update config
```bash
cp .env.example .env
```
Then edit the .env file:

```env
APP_PORT=8010   # Any available port on your machine

DB_CONNECTION=mysql
DB_HOST=host.docker.internal
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root
```
🧠 On Linux, use 172.17.0.1 instead of host.docker.internal


### 3. Install Laravel dependencies (first-time only)
```bash
docker run --rm -v $(pwd):/app -w /app php:8.2-cli \
  bash -c "apt-get update && apt-get install -y unzip git curl zip && \
  curl -sS https://getcomposer.org/installer | php && \
  php composer.phar install"
```
Skip this if the vendor/ folder already exists

### 4. Run Laravel
```bash
docker compose up --build
```
Then open in your browser:
```bash
http://localhost:{APP_PORT}
```
Replace {APP_PORT} with the port you set in .env

### 5. Use Artisan commands
```bash
docker compose exec app bash
php artisan migrate
php artisan db:seed
```