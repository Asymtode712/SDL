<?php
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    
    $sql = "INSERT INTO applicants (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful');</script>";
        echo "<script> window.location.href = 'view.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
