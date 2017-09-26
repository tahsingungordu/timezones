# Example package to show time for Laravel 5

Shows current time in various timezones. The example is a simple work.

# Installation
Install with composer
~~~
composer require bymega/timezones
~~~

Register the `provider` in `config/app.php`.
~~~
Bymega\Timezones\TimezonesServiceProvider::class,

# Using
Example URLs /timezones or /timezones/Europe-London.