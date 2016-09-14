# Converter
Convert different types of data in a simple, flexible way.

## Usage
The converter and convertible classes can be used in multiple ways. A few examples are listed below:

#### Length
```php
(new Kilometer(1))->to('m');
```
```php
Converter::from(1, 'km')->to('m');
```
```php
Converter::from(new Kilometer(1))->to(Meter::class);
```

#### Weight
```php
(new Kilogram(1))->to('g');
```
```php
Converter::from(1, 'kg')->to('g');
```
```php
Converter::from(new Kilogram(1))->to(Gram::class);
```
