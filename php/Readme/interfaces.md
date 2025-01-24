# Interfaces in PHP

## Introduction

Interfaces allow you to specify what methods a class should implement. They are defined using the `interface` keyword.

## Syntax

```php
interface InterfaceName {
    public function methodName();
}
```

## Example

```php
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$dog = new Dog();
$dog->makeSound(); // Outputs: Woof!

$cat = new Cat();
$cat->makeSound(); // Outputs: Meow!
```

## Key Points

- Interfaces cannot contain properties.
- All methods in an interface must be public.
- A class can implement multiple interfaces.

## Benefits

- Interfaces allow you to define the structure of a class without implementing its behavior.
- They provide a way to achieve abstraction and multiple inheritance in PHP.

## Conclusion

Using interfaces in PHP helps in creating a well-structured and maintainable codebase by enforcing a contract for the classes.
