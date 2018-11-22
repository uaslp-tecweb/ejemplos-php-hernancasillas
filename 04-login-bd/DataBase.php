<?php

class DataBase
{
    private $conexion;
    private $dsn;
    private $username;
    private $passwd;

    public function __construct()
    {
        $host = "localhost";
        $port = "3306";
        $dbname = "ejemplo1";
        $this->dsn = "mysql:host=".$host.";port=".$port.";dbname=".$dbname .';';
        $this->username = "root";
        $this->passwd = "root";
    }

    public function __destruct()
    {
        $this->desconectar();
    }

    public function conectar()
    {
        try{
            $this->conexion = new PDO($this->dsn, $this->username, $this->passwd);
        }
        catch(PDOException $excepcion){
            echo 'Cannot connect to the DB';
            echo $excepcion->getMessage();
        }
    }

    public function desconectar()
    {
        $this->conexion = null;
    }

    public function creaUsuario($nombre, $password)
    {
        $sql = "INSERT INTO usuarios (idUsuario, nombre, password) 
        VALUES (NULL, :nombre, :password)";
        //$resultado = $this->conexion->exec($sql);
        $sentencia = $this->conexion->prepare($sql);
        $resultado = $sentencia->execute(array(':nombre' => $nombre, ':password' => password_hash($password, PASSWORD_BCRYPT)));
        var_dump($resultado);
        echo 'Renglones agregados: ' . $resultado;
    }
}
