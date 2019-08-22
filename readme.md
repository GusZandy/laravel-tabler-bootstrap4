# Laravel Tabler
Laravel 5.5, 5.6, and 5.7 Package for integrating Tabler template and this package is Laravel Mix friendly. Currently this package can be integrated easily only on fresh installation.

# Installation
```bash
composer require guszandy/laravel-tabler
```
If you are using Laravel 5.5 above skip this step, but if aren't then add this line on ```config/app.php```, on  ```providers```
```php
'providers' => [
  ...
  GusZandy\Tabler\Providers\AppServiceProvider::class,
  ...
]
```
And then run,
```bash
php artisan make:tabler
```
Let's see what we've install. First, make sure that you already ran ```php artisan migrate``` command, then do
```bash
php artisan serve
```
Viola! You've running a Laravel site using Tabler.

# Configuration and Views Customization
## Config
To publish this package config to your app config run
```bash
php artisan vendor:publish --provider="GusZandy\Tabler\Providers\AppServiceProvider" --tag="config"
```
## Views
To publish this package views so you can customize on your own run
```bash
php artisan vendor:publish --provider="GusZandy\Tabler\Providers\AppServiceProvider" --tag="views"
```

# Next Step
First of all, you should understand how to use [Laravel Mix](https://laravel.com/docs/mix) and install latest laravel-mix.

Tabler need some package on npm. First you need to run
```bash
npm install
```

Install Tabler needed package from npm
```bash
npm install --save-dev bootstrap bootstrap-sass popper.js chart.js d3 font-awesome jquery-circle-progress jvectormap moment requirejs select2 select2-bootstrap-theme selectize sparkline tabler-ui tablesorter bootstrap-datepicker eonasdan-bootstrap-datetimepicker
```

Run Laravel Mix command
```bash
npm run development
```
or use ```production``` minimize output
```bash
npm run production
```

Then have a good look on these files
- ```webpack.mix.js```
- ```resources/assets/js/tabler.js```
- ```resources/assets/sass/tabler.scss```

Happy experimenting!
