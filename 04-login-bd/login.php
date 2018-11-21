<?php

session_start(); //DEBE SER LA PRIMER LINEA DEL SCRIPT

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nombre = $_POST['username'];
    $password = $_POST['password'];
    echo 'Looking for the user '. $nombre . '<br>';

    $host = "localhost";
    $port = "3306";
    $dbname = "ejemplo1";
    $dsn = "mysql:host=".$host.";port=".$port.";dbname=".$dbname .';';
    $username = "root";
    $passwd = "root";

    echo 'Connecting with ' . $dsn;

    try
    {
        $bd = new PDO($dsn, $username, $passwd);   
        echo '<br><br>Connected to: ' . $dsn . ' :D ';

        $consulta = "SELECT * FROM usuarios WHERE nombre=:nombre AND password=:password";
        $sentencia = $bd->prepare($consulta);
        $resultado = $sentencia->execute(array(':nombre' => $nombre, ':password' => $password));
        //$resultado = $bd->query($consulta); 

        if($resultado === false)
        {
            die('Oops! SQL is wrong or server is down');
        }
        if($sentencia->fetch() === false){
            echo '<br>The user ' . $nombre . ' doesn\'t exist  or password is wrong xD';
        }
        else{
            $_SESSION['usuario'] = $nombre;
            //echo 'Bienvenido ' . $nombre;
            header('Location: contenidoProtegido.php');
        }
        

        /*while($renglon = $resultado->fetch()){
            if($nombre == $renglon['nombre'])
            {
                echo 'User found...';
            }
        }*/
                
    }
    catch(PDOException $excepcion)
    {
        echo 'Cannot connect to DB';
        echo $excepcion->getMessage();
    }
}



?>

<?php include('header.php') ?>

<h1>Login</h1>

<form method="POST">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit">
    <br>
    <br>
</form>

<?php include('footer.php') ?>