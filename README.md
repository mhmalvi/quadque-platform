# Quadque Platform

An earlier iteration of the **Quadque Technologies** digital platform. This Laravel 8 application served as the foundational platform layer, providing core web services, user management, and content delivery before the architecture evolved into the current modular ecosystem.

Part of the **Quadque digital platform ecosystem**.

---

## Features

- Full-stack Laravel web application with Blade templating
- Laravel Sanctum for secure API token authentication
- CORS handling with Fruitcake Laravel CORS
- Laravel UI for authentication scaffolding and frontend presets
- Database migrations and seeders for structured data management
- Guzzle HTTP client for external service integration
- Environment-based configuration management
- PHPUnit test suite with factory-based test data generation

## Tech Stack

| Layer        | Technology                                  |
|--------------|----------------------------------------------|
| Backend      | PHP 7.3+/8.0, Laravel 8                     |
| Auth         | Laravel Sanctum                              |
| Frontend     | Blade Templates, Laravel UI                  |
| HTTP Client  | Guzzle 7                                     |
| CORS         | Fruitcake Laravel CORS                       |
| Build        | Laravel Mix 6, Webpack                       |
| Testing      | PHPUnit 9, Mockery, Faker                    |

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js >= 14
- MySQL

### Installation

```bash
git clone https://github.com/mhmalvi/quadque-platform.git
cd quadque-platform
composer install
npm install
```

### Environment Configuration

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with your database and application settings.

### Database Setup

```bash
php artisan migrate
php artisan db:seed
```

### Development

```bash
php artisan serve
npm run dev
```

## Project Structure

```
quadque-platform/
├── app/                 # Application logic
├── bootstrap/           # Framework bootstrap
├── config/              # Configuration files
├── database/
│   ├── factories/       # Model factories
│   ├── migrations/      # Database migrations
│   └── seeders/         # Database seeders
├── public/              # Public assets
├── resources/
│   ├── views/           # Blade templates
│   └── css/             # Stylesheets
├── routes/
│   ├── api.php          # API routes
│   └── web.php          # Web routes
├── storage/             # Logs and cache
├── tests/               # Test suites
└── webpack.mix.js       # Build configuration
```

## License

Proprietary — Quadque Technologies. All rights reserved.
