# Laravel Tabler Bootstrap 4
Laravel 5.8 and 6.0 Package for integrating Tabler template and this package is Laravel Mix friendly. Currently this package can be integrated easily only on fresh installation.

# Pre-Installation
Before install, you must create the authentication scaffolding manually

- for Laravel 5.8
```php
php artisan make:auth
```
- for Laravel 6.0
  1. First install laravel/ui package from composer  
     ```php
     composer require laravel/ui
     ```
  1. And then, run code below
     ```php
     php artisan ui vue --auth
     ```

# Installation
```php
composer require guszandy/laravel-tabler-bootstrap4
```
Run this code below to implement the template,
```php
php artisan make:tabler
```
Let's see what we've installed. First, make sure that you've already ran ```php artisan migrate``` command, then do
```php
php artisan serve
```
Viola! a Laravel site using Tabler is running right now.

# Configuration and Views Customization
## Config
To publish this package config to your app config, run this code below
```php
php artisan vendor:publish --provider="GusZandy\Tabler\Providers\AppServiceProvider" --tag="config"
```
## Views
To publish this package views so you can customize on your own, run this code below
```php
php artisan vendor:publish --provider="GusZandy\Tabler\Providers\AppServiceProvider" --tag="views"
```

# Next Step
First of all, you should understand how to use [Laravel Mix](https://laravel.com/docs/mix) and install latest laravel-mix.

Tabler need some package on npm. First you need to run
```php
npm install
```

Install Tabler needed package from npm
```php
npm install --save-dev bootstrap bootstrap-sass popper.js chart.js d3 font-awesome jquery-circle-progress jvectormap moment requirejs select2 select2-bootstrap-theme selectize sparkline tabler-ui tablesorter bootstrap-datepicker eonasdan-bootstrap-datetimepicker @ttskch/select2-bootstrap4-theme
```

Run Laravel Mix command
```php
npm run development
```
or use ```production``` minimize output
```php
npm run production
```

Then have a good look on these files
- ```webpack.mix.js```
- ```resources/assets/js/tabler.js```
- ```resources/assets/sass/tabler.scss```

Happy experimenting!

# How to use components in this package
## 1. Panel
```php
@component('tabler::components.panel', [ 'title' => 'Welcome' ])
  @slot('tools')
      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
              class="fe fe-chevron-up"></i></a>
      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
  @endslot
  You are logged in!
@endcomponent
```

## 2. Alert
```php
@component('tabler::components.alert', [ 'type' => 'info' ])
  @slot('text')
     This is an alert component.
  @endslot
@endcomponent
```

## 3. Button
```php
@component('tabler::components.button', [ 'type' => 'info', 'url' => 'www.google.com' ])
  @slot('text')
     This is a button component.
  @endslot
@endcomponent
```
## 4. Tabs
```php
@component('tabler::components.tabs', [ 'nav_tabs' => 'info' ])
  @slot('tab_panes')
     This is a tab component.
  @endslot
@endcomponent
```
