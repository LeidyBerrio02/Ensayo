<?php

class Conexion{

    private $servername="localhost";
    private $username="root";
    private $userpassword="";
    private $conexion;

    public function __CONSTRUCT(){
        try {
            $this->conexion = new PDO("mysql:host={$this->servername};dbname=ejemplo1", $this->username,$this->userpassword);
		    $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion Exitosa";
        } catch (Exception $error) {
            echo "Error";
            die($error->getMessage());
        }
    }

}


?>