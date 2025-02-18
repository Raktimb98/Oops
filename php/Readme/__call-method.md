# `__call` Method in PHP

The `__call` method in PHP is a magic method that is triggered when invoking inaccessible methods in an object context. This can be useful for handling method calls dynamically.

## Syntax

```php
public function __call(string $name, array $arguments)
```

- `name`: The name of the method being called.
- `arguments`: An enumerated array containing the parameters passed to the method.

## Example

```php
class MyClass {
    public function __call($name, $arguments) {
        echo "Calling method '$name' with arguments: " . implode(', ', $arguments);
    }
}

$obj = new MyClass();
$obj->nonExistentMethod('arg1', 'arg2');
```

## Use Cases

- **Dynamic Method Handling**: Allows you to handle method calls that are not explicitly defined.
- **Proxy or Decorator Pattern**: Can be used to implement proxy or decorator patterns where method calls are forwarded to another object.

## Notes

- The `__call` method is only invoked when a method is called in an object context.
- If a method is called statically, the `__callStatic` method should be used instead.

## References

- [PHP Manual: Magic Methods](https://www.php.net/manual/en/language.oop5.magic.php)
