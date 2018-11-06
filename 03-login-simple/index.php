<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['nombre'] == 'Hernan' && $_POST['password'] == '123') {
        header('Location: welcome.php');
    }
    else
    {
        echo 'Username or password wrong!!!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            echo'
                <h1>Login</h1>
                <form method="POST">
                    <input type="text" name="nombre" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit">
                </form>
            ';
        }
    ?>
</body>
</html>