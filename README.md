
# Datr

### What is Datr?

A simple date converter library in PHP

### Dependencies

* \>= PHP 7.4 is required

### Get Started

You can find this library at [packagist.org](https://packagist.org/packages/turbopixel/datr). 
Just add Datr to the composer.json configuration file:

> composer require turbopixel/datr

And update the composer:

> composer update

## Examples

```php

var_dump( Datr::toGermanDate("2022-07-12") );
var_dump( Datr::toGermanDateTime("2022-07-12 02:47:12") );
var_dump( Datr::toEnglishDate("12.07.2022") );
var_dump( Datr::toEnglishDateTime("12.07.2022 08:12:55") ); // alias for toSql()
var_dump( Datr::toSql("12.07.2022 08:12:55") );

// output
string(10) "12.07.2022"
string(19) "12.07.2022 02:47:12"
string(10) "2022-07-12"
string(19) "2022-07-12 08:12:55"
string(19) "2022-07-12 08:12:55"
```

## Contribution

Anyone can contribute to improve or fix Datr, to do so you can either 
report an issue (a bug, an idea...) or fork the repository, 
perform modifications to your fork then request a merge.

## Roadmap

* pre define special country date formats