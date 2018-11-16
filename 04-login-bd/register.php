<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include('DataBase.php');

        $bd = new DataBase();
        
        $bd->conectar();

    $nombre = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password === $password2)
    {
        $bd->creaUsuario($nombre, $password);
        header('Location: login.php');
    } 
    else
    {
        echo 'Password is not the same';
    }

    $bd->desconectar();
}


?>

<h1>Register</h1>

<?php include('header.php'); ?>
<form method="POST">
    <input type="text" placeholder="Username" name="username">
    <br>
    <input type="password" placeholder="Password" name="password">
    <br>
    <input type="password" placeholer="Verify Password" name="password2">
    <input type="submit">
    <br>
    <br>
</form>
<?php include('footer.php'); ?>