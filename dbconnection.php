<?php
$servername = "localhost"; // No capital 'L'
$username = "root";
$password = "";
$dbname = "Sohel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data
$name = "Sohel";
$age = 30;
$designation = "Software Developer";
$salary = 50000;

// Proper INSERT query with quotes
$sql = "INSERT INTO persons (name, age, designation, salary) 
        VALUES ('$name', $age, '$designation', $salary)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
