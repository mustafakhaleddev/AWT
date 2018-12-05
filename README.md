# AWT Translation

![AWT](https://mustafakhaled.com/images/awt.png)
Create Laravel Lang file for current locale and translate the keys from google

Laravel Awesome Translation Helper using Google Translation
```php
// Generate translation file based in current app locale 
 awtTrans('Hello World !')

```

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require mkhdev/awt
```

Add the service provider to `config/app.php` in the `providers` array, or if you're using Laravel 5.5, this can be done via the automatic package discovery.

```php
mkhdev\AWT\AWTServiceProvider::class,
```

#### ★ New Config File
Publish package config file "awt.php" to access new customize features
```php
php artisan vendor:publish --provider=mkhdev\AWT\AWTServiceProvider
```
- This file allow you to Enable/Disable Google Translator
<br>
- Enable/Disable application current locale for translator 
<br>
- Set default locale if you disabled app locale for translator

## Documentation

### Helper Function
You can use helper function to get the trans key or generate it if not found
```php
 awtTrans('Hello World !')
```
In view you can use it like this
```php
 {{awtTrans('Hello World !')}}
```
### Blade Directives
You can use our blade directive for fast translation
```php
 @awt('Hello World !')
```
### Customize Locale

You can customize the locale by adding it as a second argument
```php
awtTrans('Hello World !', 'ar')
{{awtTrans('Hello World !', 'ar')}}
@awt('Hello World !', 'ar')
```

## License

[MIT](LICENSE) © [Mustafa Khaled](https://github.com/mustafakhaleddev)
