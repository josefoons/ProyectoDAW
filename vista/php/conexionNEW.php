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

        public function getRolWeb($nick){
            $conn = $this->getConexion();
            $consulta = "SELECT rolWeb FROM usuario WHERE nick='$nick'";
            $result = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($result)) {
                
                $rolWeb = $fila[0];

            }

            return $rolWeb;
        }

    }

/*     $miconexion = new Conexion();
    $miconexion->getConexion(); */
?>