# Access Modifiers in PHP

Access modifiers are keywords used to specify the visibility and accessibility of properties and methods within a class. PHP supports three types of access modifiers:

## Public
- **Public** properties and methods can be accessed from anywhere, both inside and outside of the class.

```php
class MyClass {
    public $publicProperty = 'Public';

    public function publicMethod() {
        echo 'This is a public method.';
    }
}

$obj = new MyClass();
echo $obj->publicProperty; // Outputs: Public
$obj->publicMethod(); // Outputs: This is a public method.
```

## Protected
- **Protected** properties and methods can be accessed only within the class itself and by inheriting classes.

```php
class MyClass {
    protected $protectedProperty = 'Protected';

    protected function protectedMethod() {
        echo 'This is a protected method.';
    }
}

class ChildClass extends MyClass {
    public function accessProtected() {
        echo $this->protectedProperty; // Outputs: Protected
        $this->protectedMethod(); // Outputs: This is a protected method.
    }
}

$obj = new ChildClass();
$obj->accessProtected();
```

## Private
- **Private** properties and methods can be accessed only within the class that defines them. They are not accessible from outside the class or by inheriting classes.

```php
class MyClass {
    private $privateProperty = 'Private';

    private function privateMethod() {
        echo 'This is a private method.';
    }

    public function accessPrivate() {
        echo $this->privateProperty; // Outputs: Private
        $this->privateMethod(); // Outputs: This is a private method.
    }
}

$obj = new MyClass();
$obj->accessPrivate();
```

## Summary
- **Public**: Accessible from anywhere.
- **Protected**: Accessible within the class and by inheriting classes.
- **Private**: Accessible only within the class that defines them.

Understanding access modifiers is crucial for implementing proper encapsulation and data hiding in your PHP applications.