<img width="2048" height="1170" alt="image" src="https://github.com/user-attachments/assets/8afcb5b3-d8e1-4b15-8c9a-d8cc9d08b092" />

# Filament Undraw (ZPMLabs)

A Filament v4 select component that lets you **search & pick** [unDraw](https://undraw.co/) illustrations with **image thumbnails** in the dropdown and in the selected value.

> PHP 8.1+, Filament Forms 4.x.

---

## Install

```bash
composer require zpmlabs/filament-undraw
```

### If you want to customize the view:

```bash
php artisan vendor:publish --tag=filament-undraw-views
```

 - This will copy the blade file to `resources/views/vendor/filament-undraw/undraw-select.blade.php`.

## Usage

```php

use ZPMLabs\FilamentUndraw\Forms\Components\UndrawSelect;


UndrawSelect::make('svg_url'),
```

*** Since this is a select component, you can use other chaining methods, but keep in mind, this one has a custom view with custom styles and same official  component. ***

## Expanding Undraw Usage

In case you want to expand this in some other field or custom component you can check the [base php package](https://github.com/ZPMLabs/undraw-php) for undraw.
