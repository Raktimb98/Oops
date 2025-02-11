# PHP Namespaces

Namespaces are a way of encapsulating items. This can be seen as an abstract concept in many places. For example, in any operating system directories serve to group related files, and act as a namespace for the files within them.

## Declaring a Namespace

To declare a namespace, use the `namespace` keyword at the top of your PHP file:

```php
<?php
namespace MyProject;

class MyClass {
    // class code
}
```

## Using Namespaces

To use a class from a namespace, you can either use the fully qualified name or import the class with the `use` keyword:

```php
<?php
use MyProject\MyClass;

$obj = new MyClass();
```

## Sub-namespaces

Namespaces can be nested to create sub-namespaces:

```php
<?php
namespace MyProject\SubNamespace;

class MySubClass {
    // class code
}
```

## Aliasing/Importing

You can also alias a namespace or class for easier reference:

```php
<?php
use MyProject\SubNamespace\MySubClass as SubClass;

$obj = new SubClass();
```

## Global Namespace

If you need to access a class from the global namespace, you can prefix it with a backslash:

```php
<?php
$obj = new \GlobalClass();
```

Namespaces are a powerful feature in PHP that help you organize and modularize your code, making it easier to manage and avoid naming conflicts.
