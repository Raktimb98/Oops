# PHP Get Functions

This document provides an overview of various `get` functions available in PHP.

## Table of Contents

1. [Introduction](#introduction)
2. [Common Get Functions](#common-get-functions)
    - [gettype()](#gettype)
    - [get_class()](#get_class)
    - [get_class_methods()](#get_class_methods)
    - [get_class_vars()](#get_class_vars)
    - [get_object_vars()](#get_object_vars)
    - [get_called_class()](#get_called_class)
3. [Conclusion](#conclusion)

## Introduction

PHP offers a variety of `get` functions that allow you to retrieve information about variables, classes, and objects. These functions are useful for debugging and introspection.

## Common Get Functions

### gettype()

The `gettype()` function returns the type of a variable.

**Syntax:**

```php
gettype(mixed $var): string
```

**Example:**

```php
$variable = "Hello, World!";
echo gettype($variable); // Output: string
```

### get_class()

The `get_class()` function returns the name of the class of an object.

**Syntax:**

```php
get_class(object $object): string
```

**Example:**

```php
class MyClass {}
$obj = new MyClass();
echo get_class($obj); // Output: MyClass
```

### get_class_methods()

The `get_class_methods()` function returns an array of method names defined in a class.

**Syntax:**

```php
get_class_methods(mixed $class): array
```

**Example:**

```php
class MyClass {
    function method1() {}
    function method2() {}
}
print_r(get_class_methods('MyClass'));
// Output: Array ( [0] => method1 [1] => method2 )
```

### get_class_vars()

The `get_class_vars()` function returns an associative array of default properties of a class.

**Syntax:**

```php
get_class_vars(string $class_name): array
```

**Example:**

```php
class MyClass {
    public $var1 = 'value1';
    public $var2 = 'value2';
}
print_r(get_class_vars('MyClass'));
// Output: Array ( [var1] => value1 [var2] => value2 )
```

### get_object_vars()

The `get_object_vars()` function returns an associative array of properties of an object.

**Syntax:**

```php
get_object_vars(object $object): array
```

**Example:**

```php
class MyClass {
    public $var1 = 'value1';
    public $var2 = 'value2';
}
$obj = new MyClass();
print_r(get_object_vars($obj));
// Output: Array ( [var1] => value1 [var2] => value2 )
```

### get_called_class()

The `get_called_class()` function returns the name of the class the static method is called in.

**Syntax:**

```php
get_called_class(): string
```

**Example:**

```php
class MyClass {
    static function getClassName() {
        return get_called_class();
    }
}
echo MyClass::getClassName(); // Output: MyClass
```

## Conclusion

This document covered some of the common `get` functions in PHP. These functions are useful for retrieving information about variables, classes, and objects, and can aid in debugging and introspection.