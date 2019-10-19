# Sage Bootstrap Components

Easily use Bootstrap 4 components as Sage components. 

You can help with adding components by creating a pull request.

## Installation

You can install the package via composer:

```bash
composer require tombroucke/sage-bootstrap-components
```

## Usage

Examples:
```blade
@component('components.modal')
    This is the content of the modal
@endcomponent

@component('components.progress', ['value' => 75]) 
    // Extra bars
@endcomponent
```

More components and documentation [in the wiki](https://github.com/appstract/laravel-bootstrap-components/wiki).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
