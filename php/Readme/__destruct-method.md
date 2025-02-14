# `__destruct` Method in PHP

The `__destruct` method in PHP is a special function that is automatically called when an object is destroyed. This method is useful for performing cleanup operations, such as closing database connections or releasing resources.

## Syntax

```php
class ClassName {
    // Constructor
    public function __construct() {
        // Initialization code
    }

    // Destructor
    public function __destruct() {
        // Cleanup code
    }
}
```

## Example

```php
<?php
class MyClass {
    public function __construct() {
        echo "Constructor called\n";
    }

    public function __destruct() {
        echo "Destructor called\n";
    }
}

$obj = new MyClass();
unset($obj); // Explicitly destroying the object
?>
```

## Key Points

- The `__destruct` method is called automatically when the object is no longer referenced or explicitly destroyed using `unset()`.
- It is commonly used to release resources, such as closing files or database connections.
- Unlike constructors, destructors do not accept any parameters.

## Additional Resources

- [PHP Manual: __destruct](https://www.php.net/manual/en/language.oop5.decon.php)
- [PHP OOP Basics](https://www.php.net/manual/en/language.oop5.basic.php)
