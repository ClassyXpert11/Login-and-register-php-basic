<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Home page</title>
</head>
<body>
    <div class="container">
    <h1>Welcome to the home page</h1>
    <iframe width="500" height="315" src="https://www.youtube.com/embed/O4wcofGVb4E?si=eN97XcuqVy7dMUUA&amp;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
    

</body>
</html>

<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
    }
?>