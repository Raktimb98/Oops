# `__isset` Method in PHP

The `__isset` method is a magic method in PHP that is triggered by calling `isset()` or `empty()` on inaccessible (protected or private) or non-existing properties.

## Syntax

```php
public function __isset(string $name): bool
```

- `name`: The name of the property being checked.

## Example

```php
class MyClass {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }
}

$obj = new MyClass();
$obj->key = 'value';

if (isset($obj->key)) {
    echo 'Key is set';
} else {
    echo 'Key is not set';
}
```

In this example, the `__isset` method checks if the `key` exists in the `$data` array.

## Notes

- The `__isset` method should return a boolean value.
- It is commonly used in conjunction with the `__get` and `__set` magic methods.

## References

- [PHP Manual: __isset](https://www.php.net/manual/en/language.oop5.magic.php#object.isset)
