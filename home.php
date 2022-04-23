<?php
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1><br>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php

    } else {
        header("Location: index.php");
        exit();
    }

?>