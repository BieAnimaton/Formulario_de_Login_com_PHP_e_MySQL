<?php

    session_start();

    include 'db_conn.php';

    if (isset($_POST['uname']) && isset($_POST['password'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $uname = validate($_POST['uname']);
        $password = validate($_POST['password']);

        if (empty($uname)) {
            header("Location: index.php?error=User name is required");
            exit();
        } else if (empty($password)) {
            header("Location: index.php?error=Password is required");
            exit();
        } else {
            $sql = "select * from crud where name='$uname' AND password='$password'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['name'] === $uname && $row['password'] === $password) {
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: home.php");
                    exit();
                } else {
                    header("Location: index.php?error=Incorrect User name or Password");
                    exit();
                }
            } else {
                header("Location: index.php?error=Incorrect User name or Password");
                exit();
            }
        }

    } else {
        header("Location: index.php");
        exit();
    }

?>