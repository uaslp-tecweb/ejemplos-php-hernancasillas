<?php
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

        $consulta = "SELECT * FROM usuarios";
        $resultado = $bd->query($consulta); 

        echo '<br>';

        var_dump($resultado);

        echo '<br>';

        while($renglon = $resultado->fetch()){
            echo '<br>';
            echo 'id = '. $renglon['idUsuario'].', ' . 'nombre = '. $renglon['nombre'];
        }
                
    }
    catch(PDOException $excepcion)
    {
        echo 'Cannot connect to DB';
        echo $excepcion->getMessage();
    }
    
?>