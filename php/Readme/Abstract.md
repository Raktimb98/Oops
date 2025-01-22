# Abstract Classes in PHP

## Introduction

Abstract classes in PHP are classes that cannot be instantiated on their own and are meant to be extended by other classes. They are used to define common methods and properties that derived classes must implement.

## Syntax

```php
abstract class AbstractClass {
    // Abstract method with no body
    abstract protected function abstractMethod();

    // Regular method
    public function regularMethod() {
        echo "This is a regular method.";
    }
}
```

## Example

```php
abstract class Animal {
    abstract protected function makeSound();

    public function sleep() {
        echo "Sleeping...";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!";
    }
}

$dog = new Dog();
$dog->makeSound(); // Outputs: Bark!
$dog->sleep(); // Outputs: Sleeping...
```

## Key Points

- Abstract classes cannot be instantiated.
- They can have abstract methods that must be implemented by derived classes.
- They can also have regular methods with implementations.
- Derived classes must implement all abstract methods from the abstract class.

## Use Cases

- Defining a common interface for a group of related classes.
- Providing a base class with some default behavior that can be overridden by derived classes.

## Conclusion

Abstract classes are a powerful feature in PHP that allow you to define a blueprint for other classes. They help in creating a well-structured and organized codebase by enforcing certain methods to be implemented by derived classes.
