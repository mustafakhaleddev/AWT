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

[MIT](LICENSE) © [Mustafa Khaled](https://www.facebook.com/Mustafa.Khaled.Zaki)
