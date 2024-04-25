<?php

$conn = new mysqli("localhost", "root", "", "toll");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$vnumber = $_POST['vehicle_number'];
$vtype = $_POST['vehicle_type'];
$amount = $_POST['toll_amount'];

// Insert vehicle details into database
$sql = "INSERT INTO vehicles (vnumber, vtype, amount) VALUES ('$vnumber', '$vtype', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Vehicle details submitted successfully!');</script>";
    echo "<script>window.location.href = 'view.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
