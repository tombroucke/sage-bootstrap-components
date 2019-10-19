# Sage Bootstrap Components

Easily use Bootstrap 4 components as Sage components. 

You can help with adding components by creating a pull request.

## Installation

1. Install the package via composer:

	```bash
	composer require tombroucke/sage-bootstrap-components
	```

2. Add the bootstrap components directory

	Add the components directory in yourthemename/config/view.php so your $paths array looks like this
	
	```php
	'paths' => [
        get_theme_file_path().'/resources/views',
        get_parent_theme_file_path().'/resources/views',
        get_parent_theme_file_path().'/vendor/tombroucke/sage-bootstrap-components/resources',
    ],
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
