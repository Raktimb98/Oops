# `__clone` Method in PHP

The `__clone` method in PHP is used to create a copy of an existing object. When an object is cloned, PHP performs a shallow copy of all the object's properties. Any properties that are references to other variables will remain references.

## Syntax

```php
public function __clone()
{
    // Custom behavior for cloning
}
```

## Example

```php
class MyClass
{
    public $property1;
    public $property2;

    public function __construct($property1, $property2)
    {
        $this->property1 = $property1;
        $this->property2 = $property2;
    }

    public function __clone()
    {
        // Custom behavior for cloning
        $this->property1 = clone $this->property1;
    }
}

$original = new MyClass('value1', 'value2');
$clone = clone $original;

echo $original->property1; // Outputs: value1
echo $clone->property1;    // Outputs: value1
```

In this example, the `__clone` method is used to perform a deep copy of `property1`.

## Notes

- The `__clone` method is called automatically when an object is cloned using the `clone` keyword.
- If you need to perform a deep copy of an object, you can override the `__clone` method to handle the cloning of properties that are objects themselves.

## References

- [PHP Manual: __clone](https://www.php.net/manual/en/language.oop5.cloning.php)
