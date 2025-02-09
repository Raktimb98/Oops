# Type Hinting in PHP

Type hinting is a feature in PHP that allows you to specify the expected data type of an argument in a function or method. This helps to ensure that the correct type of data is passed to the function, reducing the chances of errors and improving code readability.

## Basic Type Hinting

You can specify the type of an argument by adding the type before the argument name in the function definition. PHP supports type hinting for the following types:

- `int`
- `float`
- `string`
- `bool`
- `array`
- `object`
- `callable`
- `iterable`
- `self`
- `parent`

### Example 1

```php
function addNumbers(int $a, int $b): int {
    return $a + $b;
}

echo addNumbers(5, 10); // Output: 15
```

## Class Type Hinting

You can also use type hinting with classes and interfaces. This ensures that the argument passed to the function is an instance of the specified class or interface.

### Example 2

```php
class User {
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}

function greetUser(User $user) {
    echo "Hello, " . $user->getName();
}

$user = new User("Alice");
greetUser($user); // Output: Hello, Alice
```

## Nullable Type Hinting

You can allow a type-hinted argument to be `null` by prefixing the type with a question mark (`?`).

### Example

```php
function setAge(?int $age) {
    if ($age === null) {
        echo "Age is not set.";
    } else {
        echo "Age is $age.";
    }
}

setAge(null); // Output: Age is not set.
setAge(25);   // Output: Age is 25.
```

## Return Type Declarations

In addition to type hinting for arguments, PHP also supports return type declarations. You can specify the return type of a function by adding a colon (`:`) followed by the type after the function's closing parenthesis.

### Example 3

```php
function getFullName(string $firstName, string $lastName): string {
    return $firstName . ' ' . $lastName;
}

echo getFullName("John", "Doe"); // Output: John Doe
```

Type hinting and return type declarations are powerful features that help to make your PHP code more robust and maintainable.
