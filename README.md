<!-- @format -->

# This is my package klick-pages

[![Latest Version on Packagist](https://img.shields.io/packagist/v/perspikapps/klick-pages.svg?style=flat-square)](https://packagist.org/packages/perspikapps/klick-pages)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/perspikapps/klick-pages/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/perspikapps/klick-pages/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/perspikapps/klick-pages/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/perspikapps/klick-pages/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/perspikapps/klick-pages.svg?style=flat-square)](https://packagist.org/packages/perspikapps/klick-pages)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require perspikapps/klick-pages
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="klick-pages-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="klick-pages-config"
```

This is the contents of the published config file:

```php
return [
    'model' => Perspikapps\KlickPages\KlickPages::class,

    'views' => [
        'layout' => 'app-layout',
        'path' => 'pages.',
        'markdown' => 'pages::_markdown',
    ],

    'routes' => [
        'name' => 'page',
        'prefix' => '',
        'handler' => Perspikapps\KlickPages\KlickPagesController::class,
    ],
];
```

## Usage

```php
$klickPages = new Perspikapps\KlickPages();
echo $klickPages->echoPhrase('Hello, Perspikapps!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [github.com/tomgrv](https://github.com/tomgrv)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
