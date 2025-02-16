# `__get` Method in PHP

The `__get` method in PHP is a magic method that is automatically called when trying to access a property that does not exist or is not visible in the object context. This method allows you to define custom behavior for retrieving the value of such properties.

## Syntax

```php
public function __get(string $name): mixed
```

- `name`: The name of the property being accessed.

## Example

Here is an example of how to use the `__get` method:

```php
class MyClass {
    private $data = [
        'name' => 'John Doe',
        'age' => 30
    ];

    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        trigger_error("Undefined property: " . $name, E_USER_NOTICE);
        return null;
    }
}

$obj = new MyClass();
echo $obj->name; // Outputs: John Doe
echo $obj->age;  // Outputs: 30
echo $obj->email; // Triggers notice: Undefined property: email
```

## Use Cases

- Accessing private or protected properties.
- Implementing lazy loading.
- Providing a flexible interface for accessing data.

## Notes

- The `__get` method should be used with caution as it can make debugging more difficult.
- Always ensure that the `__get` method does not introduce security vulnerabilities by exposing sensitive data.

## References

- [PHP Manual: __get](https://www.php.net/manual/en/language.oop5.overloading.php#object.get)
