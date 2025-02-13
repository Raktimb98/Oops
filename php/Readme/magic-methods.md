# Magic Methods in PHP

Magic methods in PHP are special methods that are triggered in response to specific actions. They are prefixed with double underscores (`__`). Here are some commonly used magic methods:

## `__construct()`

The constructor method is called when an object is instantiated.

```php
class MyClass {
    public function __construct() {
        // Initialization code
    }
}
```

## `__destruct()`

The destructor method is called when an object is destroyed.

```php
class MyClass {
    public function __destruct() {
        // Cleanup code
    }
}
```

## `__call()`

This method is invoked when an inaccessible or non-existent method is called on an object.

```php
class MyClass {
    public function __call($name, $arguments) {
        // Handle the call
    }
}
```

## `__get()`

This method is triggered when accessing an inaccessible or non-existent property.

```php
class MyClass {
    public function __get($name) {
        // Handle the property access
    }
}
```

## `__set()`

This method is triggered when setting an inaccessible or non-existent property.

```php
class MyClass {
    public function __set($name, $value) {
        // Handle the property setting
    }
}
```

## `__toString()`

This method is called when an object is treated as a string.

```php
class MyClass {
    public function __toString() {
        return "MyClass instance";
    }
}
```

## `__invoke()`

This method is called when an object is used as a function.

```php
class MyClass {
    public function __invoke() {
        // Handle the invocation
    }
}
```

## `__clone()`

This method is called when an object is cloned.

```php
class MyClass {
    public function __clone() {
        // Handle the cloning
    }
}
```

## Conclusion

Magic methods provide a way to define custom behavior for various operations on objects. They can be very powerful but should be used with care to avoid unexpected behavior.
