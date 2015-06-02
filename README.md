# Yo plugin for CakePHP 3.x

This is a very simple plugin which allow to use the [Yo libary](https://github.com/toin0u/yo).

## Installation

```bash
$ composer require 'toin0u/cakephp-yo:dev-master'
```

## Configuration

Add your Yo API key in yout `app.php`.

```php
// ...

'Yo' => [
    'apiKey' => 'as636bf1-94hs-4t62-9g1k-5feb42ccfde4',
],

// ...
```

Then add the following line in your `initialize` method in `AppController` or in a specific controller.

```php
$this->loadComponent('Yo.Yo');
```

## API

This plugin allows you to create a `\Yo\Yo` instance by calling:

```php
$yo = $this->Yo->createYo();
```

Please check the documentation in the [library](https://github.com/toin0u/yo#yoall) to read more.

## Tests

WIP

## License

This package is released under the MIT License. See the bundled
[LICENSE](https://github.com/toin0u/cakephp-yo/blob/master/LICENSE) file for details.
