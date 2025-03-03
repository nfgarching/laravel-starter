# Laravel 12 Template with Livewire Auth + Bootstrap 5.3

## About This Template

Laravel is a web application framework with expressive, elegant syntax. This template comes with Livewire Auth and Bootstrap CDN. Optional You can use node_modules or sail.

## Installation

### Create the project with composer:

```bash
composer create-project nfgarching/laravel-starter {project_name} --stability=dev
composer create-project nfgarching/laravel-starter --repository-url=http://repo.yourcomposerrepo.com
```

### Clone template

``` bash
# clone the repo
git clone  my-project

# go into app's directory
cd my-project

# install app's dependencies
composer install

# install app's dependencies
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

```

### To sync with template repo

Run this command

``` bash
git remote add template https://github.com/laravel-ready/laravel-starter
git fetch --all
git merge template/main --allow-unrelated-histories
```

## Bootstrap 5

### Default with CDN

### Alt. with sail

### Alt. with vite

``` bash
cd example-app
npm install && npm run build
composer run dev
```

## helper

### lang

search: 'item'

replace in view {{ __('file.name') }}

replace in logic __('file.name')

## Languages setttings

First Language English (US)
Second Language German (DE)
EN

- Fallback

DE

- Localisation
- Faker

## Cache clear and rebuild

```shell
php artisan optimize:clear
```

```shell
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear
php artisan event:clear
```

```shell
composer dump-autoload 
php artisan cache:forget spatie.permission.cache 
```

## 🛠️ Laravel Template
<!-- PROJECT SHIELDS -->
![Project Maintenance][maintenance-shield]
[![License][license-shield]](LICENSE)

[![GitHub Activity][commits-shield]][commits]
[![GitHub Last Commit][last-commit-shield]][commits]
[![Contributors][contributors-shield]][contributors-url]

[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]

## About

This is a laravel template repository project, which can be used as a basis for future projects. Based on the TALL stack and packed with useful features to get started right away.

## Features

The Laravel template project comes with the following features:

- PHP 8.3
- Laravel 11.x
- [Laravel Sail][sail] (docker)
- [Laravel Backup][backup] (from spatie)
- [Log Viewer][log-viewer]
- [Clockwork][clockwork] (debugging)
- [Filament PHP][filament] (admin dashboard)
- [Filament Shield][shield] (roles and permissions)
- [Devcontainer][devcontainer] for Visual Studio Code
- [GIthub Actions](.github/workflows) for CI/CD on Github
- [Pest](.github/workflows/tests.yaml)
- [Pint](.github/workflows/linting.yaml)
- [Larastan](.github/workflows/typing.yaml)

## Roles and permissions

By default there are 3 types of roles:

- Admin
- Moderator
- User

## Getting started

Follow the steps below to get started with the Laravel template project.

> [!NOTE]
> Make sure you have installed [Laravel Sail][sail] globally on your system.

### Setting up development environment

1. Clone the repository
2. Open a terminal and navigate to the **laravel** folder

3. Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

4. Uncomment and/or change the following lines in the `.env` file:

```bash
APP_NAME=Template

FORWARD_APP_PORT=80
FORWARD_DB_PORT=3306

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

5. Change the name in `docker-compose.yml`:

```yaml
---
name: 'template'
```

6. Start the development server:

```bash
./vendor/bin/sail up -d
```

7. Install the composer dependencies and generate a new application key:

```bash
./vendor/bin/sail composer install
./vendor/bin/sail php artisan key:generate
```

8. Run the database migrations and seed the database:

```bash
./vendor/bin/sail php artisan migrate --seed
```

9. Build the frontend assets and watch for changes:

```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

### Create admin user

To create an admin user for the Filament dashboard, run the following command:

```bash
./vendor/bin/sail php artisan make:filament-user
```

### Testing with Pest

To run the tests with Pest, run the following command:

```bash
./vendor/bin/sail pest --coverage
```

## License

Distributed under the **MIT** License. See [`LICENSE`](LICENSE) for more information.

Create dummy data

``` bash
php artisan tinker
```

Run the following commands (order matters)

``` tinker
User::factory()->times(10)->create();
Post::factory()->times(20)->create();
Tag::factory()->times(4)->create();
```

Finally, let's add data inside our pivot table through our database seeder.

``` bash
php artisan db:seed
```
