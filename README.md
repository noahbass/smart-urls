## Laravel Smart URLs

[![Build Status](https://travis-ci.org/noahbass/smart-urls.svg?branch=master)](https://travis-ci.org/noahbass/smart-urls)
[![Release](https://img.shields.io/github/release/noahbass/smart-urls.svg?style=flat-square)](https://packagist.org/packages/noahbass/smart-urls)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)]

Make laravel smarter by producing [protocol-relative urls](https://en.wikipedia.org/wiki/Uniform_resource_locator#Protocol-relative_URLs).

### Versions

Currently supports Laravel 4. Laravel 5 coming soon.

### Installation

Composer require:

```
composer require noahbass/smart-urls
```

Or add it to `composer.json`:

```
"require": {
	"noahbass/smart-urls": "dev-master"
}
```

Add the service provider to `app/config/app.php`:

```php
'Noahbass\SmartUrls\SmartUrlsServiceProvider'
```

`Noahbass\SmartUrls\SUrl` and `Noahbass\SmartUrls\SForm` are available for aliases. Use them at your leisure in `app/config/app.php` (Using `URL` in this example):

```php
'URL'  => 'Noahbass\SmartUrls\SUrl',
'Form' => 'Noahbass\SmartUrls\SForm'
```

### Usage

Use your alias:

```php
{{ URL::to('something') }}
# will produce: //<host>/something
```

```php
{{ Form::open(['url' => 'something']) }}
# will produce: <form method="POST" action="//<host>/something" accept-charset="UTF-8">...
```


### Todo

- Add the same protocal-relative urls for laravel forms and etc.
- Testing
