## Lesson 7

```
php artisan make:auth
```

## Lesson 8

create partials:
- _errors.blade.php
- _head.blade.php
- _nav.blade.php
- _footer.blade.php
- _script.blade.php


## Lesson 9

create main layout view: main.blade.php:
```php
<!DOCTYPE html>
<html lang="en">
@include('partials._head')
<body>
	@include('partials._nav')
	<div class="container">
		@include('partials._errors')
		@yield('content')
		@include('partials._footer')
	</div>
	@yield('script')
</body>
</html>
```

## Lesson 11

Pulling CSS and JS

## Lesson 14 - 19

Creating Navbar and footer



