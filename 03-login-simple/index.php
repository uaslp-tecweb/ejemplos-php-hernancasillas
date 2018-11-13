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
        header('Location: error.php?desc=User or password not valid');
    }
}

function verifyLogin($user, $password)
{
    global $usuarios;

    foreach($usuarios as $usr => $pwd)
    {
        if($user === $usr && $password === $pwd)
            return true;
    }

    return false;
}

?>
    <?php include('header.php');?>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
        <h1>Login</h1>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit">
        </form>
    <?php endif; ?>
    <?php include('footer.php');?>

</body>
</html>