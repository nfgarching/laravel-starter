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

## Use of Bootstrap 5

### Default with [CDN](https://getbootstrap.com/docs/5.3/getting-started/introduction/#cdn-links)

Template include Bootstrap’s production-ready CSS and JavaScript via CDN without the need for any build steps.

### Optional install Bootsrap 5 with [Vite](https://laravel.com/docs/12.x/vite)

Goto directory resource/views/components/layouts/app/

Remove in head.blade.php

``` html
<!-- Bootstrap CSS + Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
```

Add in head.blade.php

``` html
@vite(['resources/css/app.scss', 'resources/js/app.js'])
```

Remove in script.blade.php

``` html
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
```

Running Vite

``` bash
cd {my-project}
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
