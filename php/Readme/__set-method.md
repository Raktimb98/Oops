# `__set` Method in PHP

The `__set` method in PHP is a magic method that is automatically called when you try to set the value of an inaccessible or non-existing property of an object.

## Syntax

```php
public function __set($name, $value)
```

- `$name`: The name of the property being set.
- `$value`: The value being assigned to the property.

## Example

```php
class MyClass {
    private $data = array();

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }
}

$obj = new MyClass();
$obj->name = "GitHub Copilot";
echo $obj->name; // Outputs: GitHub Copilot
```

In this example, the `__set` method is used to set values to properties that do not exist in the class. The `__get` method is also implemented to retrieve the values of these properties.

## Use Cases

- Dynamic properties: When you want to add properties to an object dynamically.
- Encapsulation: To control how properties are set and ensure data integrity.

## Notes

- The `__set` method will not be called if the property being set is already accessible (public).
- It is a good practice to use the `__set` method carefully to avoid unexpected behavior and maintain code readability.

For more information, refer to the [PHP documentation on magic methods](https://www.php.net/manual/en/language.oop5.magic.php).
