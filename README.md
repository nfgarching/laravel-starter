# Laravel 12 Template with Livewire Auth + Bootstrap 5.3

## About this template

This is a laravel template repository project, which can be used as a basis for future projects. This template comes with Livewire Auth and Bootstrap 5 CDN. Optional You can use node_modules or sail.

## Features

The Laravel template project comes with the following features:

- [Laravel 12.x](https://laravel.com/)
- [Bootstrap 5](https://getbootstrap.com/)

## Installation

<!-- ### Create the project with composer

```bash
composer create-project nfgarching/laravel-starter {project_name} --stability=dev
composer create-project nfgarching/laravel-starter --repository-url=http://repo.yourcomposerrepo.com

composer create-project nfgarching/laravel-starter testproject --repository-url=https://github.com/nfgarching/laravel-starter

```
 -->
### Clone template

``` bash
# Clone the repo
git clone git@github.com:nfgarching/laravel-starter.git {my-project}

# Go into app's directory
cd {my-project}

# Install app's dependencies
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

# Start application
php artisan serve

```

### Create own Git-Repository

Run this command

``` bash
# Go into app's directory
cd {my-project}

# Delete Git-Repository github.com:nfgarching/laravel-starter.git
rm -fr .git

# Start a new Git-Repository
git init
git add .
git commit -m 'initial commit'
```

### Optional install [sail](https://laravel.com/docs/12.x/sail#installing-sail-into-existing-applications)

``` bash
composer require laravel/sail --dev
php artisan sail:install
./vendor/bin/sail up
```

Bei Fehlermeldung SQLSTATE[HY000] [2002] Connection refused (Connection: mysql, SQL: select * from `sessions` where `id` = ... limit 1)

``` bash
composer require laravel/sail --dev
php artisan sail:install
./vendor/bin/sail up
```

## Use of Bootstrap 5

### Default with [CDN](https://getbootstrap.com/docs/5.3/getting-started/introduction/#cdn-links)

Get started by including Bootstrap’s production-ready CSS and JavaScript via CDN without the need for any build steps.

### Optional install with vite

``` bash
cd example-app
npm install && npm run build
composer run dev
```

<!-- ## Create dummy data

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

## Testing with Pest

To run the tests with Pest, run the following command:

```bash
./vendor/bin/sail pest --coverage
``` -->

## License

Distributed under the **MIT** License. See [`LICENSE`](LICENSE) for more information.
