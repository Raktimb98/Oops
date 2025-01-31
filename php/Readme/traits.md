# Traits in PHP

Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies.

## Defining a Trait

To define a Trait, use the `trait` keyword:

```php
trait ExampleTrait {
    public function sayHello() {
        echo "Hello from ExampleTrait!";
    }
}
```

## Using a Trait in a Class

To use a Trait in a class, use the `use` keyword inside the class:

```php
class ExampleClass {
    use ExampleTrait;
}

$example = new ExampleClass();
$example->sayHello(); // Outputs: Hello from ExampleTrait!
```

## Multiple Traits

A class can use multiple Traits:

```php
trait FirstTrait {
    public function firstMethod() {
        echo "First method";
    }
}

trait SecondTrait {
    public function secondMethod() {
        echo "Second method";
    }
}

class CombinedClass {
    use FirstTrait, SecondTrait;
}

$combined = new CombinedClass();
$combined->firstMethod(); // Outputs: First method
$combined->secondMethod(); // Outputs: Second method
```

## Conflict Resolution

If two Traits insert a method with the same name, a conflict will occur. To resolve this, you need to explicitly choose which method to use:

```php
trait TraitA {
    public function method() {
        echo "Method from TraitA";
    }
}

trait TraitB {
    public function method() {
        echo "Method from TraitB";
    }
}

class ConflictClass {
    use TraitA, TraitB {
        TraitA::method insteadof TraitB;
        TraitB::method as methodFromTraitB;
    }
}

$conflict = new ConflictClass();
$conflict->method(); // Outputs: Method from TraitA
$conflict->methodFromTraitB(); // Outputs: Method from TraitB
```

## Conclusion

Traits are a powerful tool in PHP that allow for better code reuse and organization. They help to overcome the limitations of single inheritance by allowing methods to be shared across multiple classes.
