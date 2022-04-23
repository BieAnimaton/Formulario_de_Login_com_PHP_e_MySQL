<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User name</label>
        <input type="text" name="uname" placeholder="User name"><br>

        <label>Passwood</label>
        <input type="password" name="password" placeholder="User name"><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>