<?php
$serverName = "your_server_name";
$username = "your_username";
$password = "your_password";
$databaseName = "your_database_name";

// Create connection
$conn = new mysqli("projectmouadh-server.mysql.database.azure.com", "zwowlyslug","43510T8LNY6Z3314$", "projectmouadh-database");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create 'users' table
$sql = "CREATE TABLE users (
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL
)";

// Execute query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
