<?php
$conn = new mysqli("localhost","root" , "","complaint" );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$complaint = $_POST['complaint'];

$sql = "INSERT INTO complaints (name, email, department, complaint) VALUES ('$name', '$email', '$department', '$complaint')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Complaint submitted successfully!');</script>";
    echo "<script>window.location.href = 'view.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>