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

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


## Installation

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