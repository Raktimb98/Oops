# `__unset` Method in PHP

The `__unset` method in PHP is a magic method that is invoked when `unset()` is called on inaccessible properties of an object. This method allows you to define custom behavior for when a property is unset.

## Syntax

```php
public function __unset(string $name): void
```

- `name`: The name of the property to unset.

## Example

```php
class MyClass {
    private $data = [];

    public function __unset($name) {
        if (array_key_exists($name, $this->data)) {
            unset($this->data[$name]);
        }
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name] ?? null;
    }
}

$obj = new MyClass();
$obj->property = 'value';
unset($obj->property);
```

In this example, the `__unset` method is used to remove a property from the `$data` array when `unset()` is called on an object of `MyClass`.

## When to Use

Use the `__unset` method when you need to control the behavior of unsetting properties in your objects, especially when dealing with inaccessible or private properties.

## Notes

- The `__unset` method will not be called for public properties.
- It is only triggered for inaccessible properties, such as private or protected properties.

## See Also

- [PHP Magic Methods](https://www.php.net/manual/en/language.oop5.magic.php)
- [`unset()` function](https://www.php.net/manual/en/function.unset.php)
