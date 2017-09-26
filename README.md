# Example package to show time for Laravel 5

Shows current time in various timezones. The example is a simple work.

- [Timezones on Packagist](https://packagist.org/packages/bymega/timezones)

# Installation
Install with composer
~~~
composer require bymega/timezones
~~~

Register the `provider` in `config/app.php`.
~~~
Bymega\Timezones\TimezonesServiceProvider::class,
~~~

Publish files with:
~~~
php artisan vendor:publish --tag=timezones --force
~~~

# Using
Example URLs /timezones or /timezones/Europe-London.
