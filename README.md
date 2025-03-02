# Laravel 12 Template with Livewire Auth + Bootstrap 5.3




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1 align="center">Welcome to the <a href="https://getbootstrap.com/">Bootstrap</a> community!</h1><br>

<p align="center">
  <a href="https://getbootstrap.com/">
    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" alt="Bootstrap logo" width="200" height="165">
  </a>
</p>

<p align="center">
  Bootstrap is the world's most powerful, extensible, and feature-packed frontend toolkit—<br>with a vast community of themes, extensions, plugins, and more.
</p>

<p align="center">
  <a href="https://getbootstrap.com/docs/">Bootstrap</a>
  ·
  <a href="https://icons.getbootstrap.com/">Bootstrap Icons</a>
  ·
  <a href="https://themes.getbootstrap.com/">Themes</a>
  ·
  <a href="https://blog.getbootstrap.com/">Blog</a>
</p>


## About This Template

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Without node_modules


- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


## Installation

Create the project with composer:

```bash
composer create-project nfgarching/laravel-starter {project_name} --stability=dev
composer create-project nfgarching/laravel-starter --repository-url=http://repo.yourcomposerrepo.com

```



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

## To sync with template repo

Run this command

```
git remote add template https://github.com/laravel-ready/laravel-starter
git fetch --all
git merge template/main --allow-unrelated-histories
```

## Documentation

You can find the documentation **[here](./DOCS.md).**

Photo by <a href="https://unsplash.com/@sebastiansvenson?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Sebastian Svenson</a> on <a href="https://unsplash.com/photos/c10tq-bB52Y?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

## Bootstrap 5

### Default with CDN

### Alt. with sail

### Alt. with vite

## Introduction

This Template should be used by copy some needed parts to extend your debug possibilitys and speed up development.

The next steps are choose a starter Template, like jetstream or breeze if you want one and build your prefered software-stack.

contact me, if one of your software-stack tools not working with this template. The incompatibles can you found [here](/doc/template/dependencie_vaults.md).

Jetstream should be configured with the permission. See this tutorial:
<https://geisi.dev/blog/combining-laravel-jetstream-with-spatie-permissions/>

email:
wi2z69k2w@relay.firefox.com

## using

run

```artisan
php artisan storage:link
```
(will automaticly run by jetstream installation)

copy env.example to .env,

generate your app-key

## Documentation

Overview about Relationships: [draw.io File](/doc/template/Relationship_Modell.drawio)

This Project use [following Packages](/doc/template/integrated.md)

## some stuff

[This bigger Projects](/doc/template/environment.md)  are not integrated

How to clear your [cache](/doc/template/cache.md) and [run tests](/doc/template/dusk%2C%20test.md)

[Artisan commands](/doc/template/artisans.md) there used in this template

---

## helper

### lang

search:
'item'
replace in view
{{ __('file.name') }}
replace in logic
__('file.name')

### wrong html using

placeholder='
class='

>>

<<

Bootstrap:

btn-yellow

## distriction

views/components No Routing

app\
Services only Procedurally

Http\
Controllers\Modules only Objective

- Object type
- Objective Instantiate
- Procedurally static

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


# 🛠️ Laravel Template
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

<!-- MARKDOWN LINKS & IMAGES -->
[backup]: https://spatie.be/docs/laravel-backup/v8/introduction
[devcontainer]: https://laravel.com/docs/11.x/sail#using-devcontainers
[filament]: https://filamentphp.com
[sail]: https://laravel.com/docs/11.x/sail
[shield]: https://github.com/bezhanSalleh/filament-shield
[log-viewer]: https://log-viewer.opcodes.io
[clockwork]: https://underground.works/clockwork

[maintenance-shield]: https://img.shields.io/maintenance/yes/2024.svg?style=for-the-badge
[contributors-shield]: https://img.shields.io/github/contributors/klaasnicolaas/laravel-template.svg?style=for-the-badge
[contributors-url]: https://github.com/klaasnicolaas/laravel-template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/klaasnicolaas/laravel-template.svg?style=for-the-badge
[forks-url]: https://github.com/klaasnicolaas/laravel-template/network/members
[stars-shield]: https://img.shields.io/github/stars/klaasnicolaas/laravel-template.svg?style=for-the-badge
[stars-url]: https://github.com/klaasnicolaas/laravel-template/stargazers
[issues-shield]: https://img.shields.io/github/issues/klaasnicolaas/laravel-template.svg?style=for-the-badge
[issues-url]: https://github.com/klaasnicolaas/laravel-template/issues
[license-shield]: https://img.shields.io/github/license/klaasnicolaas/laravel-template.svg?style=for-the-badge
[commits-shield]: https://img.shields.io/github/commit-activity/y/klaasnicolaas/laravel-template.svg?style=for-the-badge
[commits]: https://github.com/klaasnicolaas/laravel-template/commits/master
[last-commit-shield]: https://img.shields.io/github/last-commit/klaasnicolaas/laravel-template.svg?style=for-the-badge




## Laravel Blog Template [STATIC]
This is the official repository for my upcoming YouTube tutorials. <br>
•	Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Usage <br>
Setup the repository <br>
```
git clone git@github.com:codewithdary/laravel-blog-template.git
cd laravel-blog-template
composer install
cp .env.example .env 
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
```

Create dummy data
```
php artisan tinker
```

Run the following commands (order matters)
```
User::factory()->times(10)->create();
Post::factory()->times(20)->create();
Tag::factory()->times(4)->create();
```

Finally, let's add data inside our pivot table through our database seeder.
```
php artisan db:seed
```