## Laravel Smart URLs

Make laravel smarter by producing [protocol-relative urls](https://en.wikipedia.org/wiki/Uniform_resource_locator#Protocol-relative_URLs).

### Installation

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

Add the same protocal-relative urls for laravel forms and etc.
