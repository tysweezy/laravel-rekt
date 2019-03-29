# laravel-rekt
A laravel package for handling user account moderation.

# Note:

This is still a work in progress. Just initialzing this repo for now. 

## Installing Package

You can install package via Composer

```
composer require tysweezy/laravel-rekt
```

Then you may add the service provider in your `config/app.php` file

```php
'providers' => [
    // ..other service providers yo!
    Tysweezy\Rekt\RektServiceProvider::class
]
```

## Publishing package

*Publish Migrations*

```
php artisan vendor:publish --provider="Tysweezy\Rekt\RektServiceProvider" --tag="migrations"
```

*Publish Config File*

```
php artisan vendor:publish --provider="Tysweezy\Rekt\RektServiceProvider" --tag="config"
```

Once configured, then run your migrations 

```
php artisan migrate
```

## Usage

Make sure you add the `Rektable` trait into your Users model

```php
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tysweezy\Rekt\Traits\Rektable;

class User extends Authenticatable
{
    use Notifiable, Rektable;

    // ..
}
```