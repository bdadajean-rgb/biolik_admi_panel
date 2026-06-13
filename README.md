# Biolik Admin Panel — Developer Guide

This README provides a concise developer guide in English and French.

---

## English — Quick Start

- **Prerequisites:** PHP 8.0+, Composer, Node.js (16+), npm/yarn, MySQL or PostgreSQL, Git.
- **Copy env:**

```powershell
cd C:\Users\l\Desktop\bio\biolik_admi_panel
copy .env.example .env   # PowerShell (Windows)
# or on WSL / macOS / Linux:
cp .env.example .env
```

- **Install dependencies:**

```bash
composer install
npm install
```

- **Generate app key, migrate and seed DB:**

```bash
php artisan key:generate
php artisan migrate --seed
```

- **Run development server / build assets:**

```bash
npm run dev      # dev server / watch
npm run build    # production build
php artisan serve --host=127.0.0.1 --port=8000
```

- **Run tests:**

```bash
php artisan test
# or
vendor/bin/phpunit
```

---

## Français — Démarrage rapide

- **Prérequis :** PHP 8.0+, Composer, Node.js (16+), npm/yarn, MySQL ou PostgreSQL, Git.
- **Copier le fichier d'environnement :**

```powershell
cd C:\Users\l\Desktop\bio\biolik_admi_panel
copy .env.example .env   # PowerShell (Windows)
```

- **Installer les dépendances :**

```bash
composer install
npm install
```

- **Générer la clé, migrer et seed la base :**

```bash
php artisan key:generate
php artisan migrate --seed
```

- **Lancer en développement / construire les assets :**

```bash
npm run dev
npm run build
php artisan serve --host=127.0.0.1 --port=8000
```

- **Lancer les tests :**

```bash
php artisan test
```

---

## Notes for developers / Notes pour les développeurs

- Environment variables: update the `.env` file (DB connection, MAIL, APP_ENV).
- Database migrations are under `database/migrations` and seeders under `database/seeders`.
- Frontend assets live in `resources/js` and `resources/css` and are built via Vite.
- Use `php artisan route:list` and `php artisan config:cache` when preparing production.

---

## Git & CI / Git et déploiement

- Recommended workflow: create a feature branch from `main` and open pull requests for review.
- Commit message convention: short summary, optionally a longer description.
- If you face SSH host verification when pushing, respond `yes` (not `y`) to the host prompt or add GitHub host to known_hosts:

```powershell
ssh-keyscan github.com >> $env:USERPROFILE\.ssh\known_hosts
```

- Ensure your SSH public key is added to your GitHub account and the key is loaded in the SSH agent.

---

## Contributing / Contribution

- Fork the repository, implement changes on a feature branch, run tests and create a pull request.
- Keep changes focused and add tests for bug fixes or features.

---

## Contact

- Maintainer: bdadajean-rgb (GitHub)
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# biolik_admi_panel" 
