<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Catalogue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .book {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .book h2 {
            margin-top: 0;
        }

        .book p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Books Catalogue</h1>
        <?php include 'retrieve.php'; ?>
    </div>
</body>
</html>