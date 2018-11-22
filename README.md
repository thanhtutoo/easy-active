Easy Active Class for html markup in laravel
==================
Active is a helper package for Laravel that makes it easy to provide the active class in html markup.


## Installation
Install with `composer`:
```
composer require thanhtut/easy-active dev-master
```
And add the service provider in config/app.php
```
'providers' => [
    ........,
    Thanhtut\EasyActive\EasyActiveServiceProvider::class,
]
```
```
'aliases' => [
    ........,
   'Active' => Thanhtut\EasyActive\Active::class,
]
```

## Usage
```
{{Active::is_active('home')}} // http://localhost:8000/home
```
```
<a href="/home" class="{{Active::is_active('home')}}" >Home</a>
```
