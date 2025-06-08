# Laravel Web Service

A modern web service built with Laravel 12, providing a robust API backend infrastructure.

## 🚀 Features

- Built on Laravel 12.x
- PHP 8.2+ compatibility
- RESTful API architecture
- Modern development workflow with Vite
- Comprehensive testing setup with Pest
- Code quality tools (PHP_CodeSniffer, Laravel Pint)
- Development monitoring with Laravel Pail
- Docker support via Laravel Sail

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- SQLite/MySQL/PostgreSQL

## 🛠 Installation

1. Clone the repository:
```bash
git clone https://github.com/shashinthalk/lar-service
cd webservice
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
```

4. Set up your environment:
```bash
cp .env.example .env
php artisan key:generate
```

5. Set up the database:
```bash
php artisan migrate
```

## 🚦 Development

Start the development server:
```bash
composer dev
```

This command will concurrently run:
- Laravel development server
- Queue worker
- Laravel Pail (log monitoring)
- Vite development server

## 🧪 Testing

Run the test suite:
```bash
composer test
```

## 🛠 Available Commands

- `composer dev` - Start development environment
- `composer test` - Run tests
- `./vendor/bin/pint` - Fix code style
- `./vendor/bin/phpcs` - Check code style

## 📦 Dependencies

### Main Dependencies
- Laravel Framework 12.x
- Laravel Tinker

### Development Dependencies
- Laravel Sail (Docker)
- Laravel Pail (Log monitoring)
- Laravel Pint (Code styling)
- Pest PHP (Testing)
- PHP_CodeSniffer
- Faker PHP

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
