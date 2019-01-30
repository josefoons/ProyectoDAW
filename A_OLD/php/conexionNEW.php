<?php
    class Conexion{
        private $servidor = "localhost";
        private $username = "daw";
        private $password = "daw";
        private $basedatos = "proyectoDAW";
    
        public function getConexion() {
            $conn = mysqli_connect($this->servidor, $this->username, $this->password, $this->basedatos);
            return $conn;
        }
    }

    $miconexion = new Conexion();
    $miconexion->getConexion();
?>