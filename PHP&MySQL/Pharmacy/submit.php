<?php

$conn = new mysqli("localhost", "root", "", "pharmacy");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $mname = $_POST['mname'];
    $quantity = $_POST['quantity'];
    $eduration =$_POST['eduration'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO stock (mname,eduration,quantity) VALUES ('$mname', '$eduration', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
        echo "<script>window.location.href = 'view.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// Close connection
$conn->close();
?>
