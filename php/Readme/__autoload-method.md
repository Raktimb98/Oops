# `__autoload` Method in PHP

The `__autoload` method in PHP is a magic method that is automatically called when you try to use a class that hasn't been defined yet. This method can be used to load class definitions dynamically.

## Syntax

```php
function __autoload($class_name) {
    include $class_name . '.php';
}
```

## Example

```php
<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$obj = new MyClass();
?>
```

In this example, when the `new MyClass()` statement is executed, PHP will call the `__autoload` function with `MyClass` as the argument. The function will then include the `MyClass.php` file.

## Note

The `__autoload` method is deprecated as of PHP 7.2.0 and removed as of PHP 8.0.0. It is recommended to use the `spl_autoload_register` function instead.

## Using `spl_autoload_register`

```php
<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj = new MyClass();
?>
```

The `spl_autoload_register` function allows you to register multiple autoload functions, providing more flexibility and better performance.

## References

- [PHP Manual: Autoloading Classes](https://www.php.net/manual/en/language.oop5.autoload.php)
- [PHP Manual: spl_autoload_register](https://www.php.net/manual/en/function.spl-autoload-register.php)
