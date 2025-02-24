# `__sleep` Method in PHP

The `__sleep` method is a magic method in PHP that is called when an object is serialized. It allows you to clean up the object before serialization and specify which properties should be serialized.

## Usage

```php
class MyClass {
    private $property1;
    private $property2;
    private $property3;

    public function __sleep() {
        // Perform cleanup tasks if necessary
        // Return an array of property names to be serialized
        return ['property1', 'property2'];
    }
}
```

In this example, only `property1` and `property2` will be serialized, while `property3` will be excluded.

## Key Points

- The `__sleep` method should return an array of property names that need to be serialized.
- It is useful for cleaning up resources or preparing the object for serialization.
- If you need to perform any actions after deserialization, you can use the `__wakeup` method.

## Example

```php
class DatabaseConnection {
    private $connection;
    private $dsn;
    private $username;
    private $password;

    public function __construct($dsn, $username, $password) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect() {
        // Simulate database connection
        $this->connection = "Connected to database";
    }

    public function __sleep() {
        // Close the connection before serialization
        $this->connection = null;
        return ['dsn', 'username', 'password'];
    }

    public function __wakeup() {
        // Re-establish the connection after deserialization
        $this->connect();
    }
}
```

In this example, the `DatabaseConnection` class uses the `__sleep` method to close the connection before serialization and the `__wakeup` method to re-establish the connection after deserialization.
