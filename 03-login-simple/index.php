<?php

$usuarios = array(
    'Hernan' => '123',
    'Juan' => 'secret',
    'Raul' => 'abc');

echo '<ul>';
foreach($usuarios as $llave => $valor){
    echo '<li>The password of ' . $llave . ' is ' . $valor . '</li>';
}
echo '</ul>';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (verifyLogin($_POST['nombre'], $_POST['password'])) 
    {
        //header("Location: welcome.php?nombre=${$_POST['nombre']}");
        header('Location: welcome.php?nombre='. $_POST['nombre']);
    }
    else
    {
        header('Location: error.php');
    }
}

function verifyLogin($user, $password)
{
    var_dump($user);
    var_dump($password);

    foreach($usuarios as $usr => $pwd)
    {
        var_dump($usr);
        var_dump($pwd);
        if($usuario === $usr && $password === $pwd)
            return true;
    }
    return false;
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
    <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
        <h1>Login</h1>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit">
        </form>
    <?php endif; ?>
</body>
</html>