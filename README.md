## Laravel Smart URLs

Make laravel smarter by producing [protocol-relative urls](https://en.wikipedia.org/wiki/Uniform_resource_locator#Protocol-relative_URLs).

### Installation

Add the service provider to `app/config/app.php`:

```php
'Noahbass\SmartUrls\SmartUrlsServiceProvider'
```

Then add the alias to `app/config/app.php` (Using `URL` in this example):

```php
'URL' => 'Noahbass\SmartUrls\SUrl'
```

### Usage

Use your alias:

```php
{{ URL::to('something') }} # will produce: //<host>/something
```
