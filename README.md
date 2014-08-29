# Localized Eloquent Date

This library extends Eloquent for multi-language date support. Replace the use of [Carbon](https://github.com/briannesbitt/Carbon) in Eloquent to [Laravel Date](https://github.com/jenssegers/laravel-date) with PHP Trait. And this library support [Ardent](https://github.com/laravelbook/ardent) too.

## Installation

Add the package to your `composer.json` and run `composer update`.

```
    {
        "require": {
            "qwildz/localized-eloquent-date": "dev-master"
        }
    }
```

Add the [Laravel Date](https://github.com/jenssegers/laravel-date) service provider in `app/config/app.php`:

```php
    'Jenssegers\Date\DateServiceProvider',
```

And if you need, you can add an alias to use [Laravel Date](https://github.com/jenssegers/laravel-date) package:

```php
    'Date'            => 'Jenssegers\Date\Date',
```


## Usage

### Eloquent

If your model use pure Eloquent, just change your model class to extends `Qwildz\LocalizedEloquentDate\LocalizedEloquent` clas.

```php
use Qwildz\LocalizedEloquentDate\LocalizedEloquent as Model;

class MyModel extends Model {}
```

### Ardent

Or if you use Ardent, extends `Qwildz\LocalizedEloquentDate\LocalizedArdent` class.

```php
use Qwildz\LocalizedEloquentDate\LocalizedArdent as Model;

class MyModel extends Model {}
```
### Other

You still can use the library if you don't use both above with using `Qwildz\LocalizedEloquentDate\LocalizedDateTrait` trait.

```php
use Qwildz\LocalizedEloquentDate\LocalizedDateTrait;

class MyModel extends Model {
    
    use LocalizedDateTrait;

    ...
}
```