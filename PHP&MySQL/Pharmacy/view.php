<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Stock</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Current Stock</h1><br><br>
        <?php

        $conn = new mysqli("localhost", "root", "", "pharmacy");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch current stock data
        $sql = "SELECT * FROM stock";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<p><strong>Medicine Name:</strong> " . $row["mname"] . " - <strong>Duration:</strong> " . $row["eduration"] . " - <strong>Quantity:</strong> " . $row["quantity"] . "</p>";
            }
        } else {
            echo "<p>No stock available</p>";
        }

        // Close connection
        $conn->close();
        ?>
        <br>
        <a href="index.html">Go Back</a>
    </div>
</body>
</html>
