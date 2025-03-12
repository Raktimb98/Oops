# MySQLi Object-Oriented

This document provides an overview of using MySQLi in an object-oriented manner in PHP.

## Introduction

MySQLi (MySQL Improved) is a PHP extension designed to interact with MySQL databases. It provides a more secure and efficient way to perform database operations compared to the older MySQL extension.

## Connecting to the Database

To connect to a MySQL database using MySQLi in an object-oriented way, you can use the following code:

```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
```

## Performing Queries

### Select Query

To perform a SELECT query, you can use the following code:

```php
<?php
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
```

### Insert Query

To perform an INSERT query, you can use the following code:

```php
<?php
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
```

## Closing the Connection

Always close the database connection when you're done:

```php
<?php
$conn->close();
?>
```

## Conclusion

Using MySQLi in an object-oriented manner provides a clean and efficient way to interact with MySQL databases in PHP. This guide covered the basics of connecting to a database, performing queries, and closing the connection.
