# Magic Constants in PHP

PHP provides a set of predefined constants, known as magic constants, which change depending on where they are used. These constants are useful for debugging and logging purposes.

## List of Magic Constants

1. `__LINE__`
    - The current line number of the file.

2. `__FILE__`
    - The full path and filename of the file.

3. `__DIR__`
    - The directory of the file.

4. `__FUNCTION__`
    - The function name.

5. `__CLASS__`
    - The class name.

6. `__TRAIT__`
    - The trait name.

7. `__METHOD__`
    - The class method name.

8. `__NAMESPACE__`
    - The name of the current namespace.

## Example Usage

```php
<?php
echo "This is line number " . __LINE__ . "\n";
echo "This file is located at " . __FILE__ . "\n";
echo "This directory is " . __DIR__ . "\n";

function testFunction() {
     echo "This function is named " . __FUNCTION__ . "\n";
}

testFunction();

class TestClass {
     public function testMethod() {
          echo "This class is named " . __CLASS__ . "\n";
          echo "This method is named " . __METHOD__ . "\n";
     }
}

$test = new TestClass();
$test->testMethod();
?>
```

## Conclusion

Magic constants are a powerful feature in PHP that can help you understand and debug your code more effectively. They provide context-specific information that can be very useful during development.
