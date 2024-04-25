<?php

if (!isset($_POST['username'])) {
    header("Location: signup.html");
    exit;
}

// Get username from session
$username = $_POST['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your welcome page.</p>
</body>
</html>