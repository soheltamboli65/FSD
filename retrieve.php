<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Sohel";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, age, designation, salary FROM persons";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"] . 
             " - Age: " . $row["age"] . 
             " - Designation: " . $row["designation"] . 
             " - Salary: " . $row["salary"] . "<br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
