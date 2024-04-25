<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Search</title>
<style>
    body{
        background-color: grey;
    }
    .container{
        margin: auto;
        margin-top: 80px;
        width: 300px;
        height: 300px;
        background-color:white;
        display: flex;
        justify-content: center;
        align-items:center;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 5px 5px 8px black;
        position: relative;
    }
    p{
        position: absolute;
        margin-left: 500px;
        margin-top: 450px;
        font-weight: 900;

    }
</style>
</head>
<body>
<?php
// Create an indexed array of employee names
$employee_names = array(
"John",
"Jane",
"Michael",
"Emily",
"David",
"Sophia",
"William",
"Olivia",
"Daniel",
"Emma",
"Matthew",
"Ava",
"Christopher",
"Mia",
"Andrew",
"Ella",
"James",
"Grace",
"Logan",
"Lily"
);
// Check if a name exists in the array
if (isset($_GET['search_name'])) {
$search_name = $_GET['search_name'];
$result = in_array($search_name, $employee_names);
if ($result) {
echo "<p>{$search_name} is an employee.</p>";
} else {
echo "<p>{$search_name} is not found in the list of employees.</p>";
}

}
?>
<!-- HTML form for user input -->
<div class="container">
<form method="GET" action="">
<label for="search_name">Enter employee name:</label>
<input type="text" name="search_name" id="search_name" required>
<button type="submit">Search</button>
</div>
</form>
</body>
</html>