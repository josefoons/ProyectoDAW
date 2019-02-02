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

        public function buscar($busqueda, $campo, $valor){
            $conn = $this->getConexion();
            $consulta = "SELECT '$busqueda' FROM usuario WHERE '$campo'='$valor'";
            $result = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($result)) {
                
                return $fila[0];

            }
        }

        public function getNick($id){
            $conn = $this->getConexion();
            $consulta = "SELECT nick FROM usuario WHERE id='$id'";
            $result = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($result)) {
                
                $nick = $fila[0];

            }

            return $nick;
        }

    }

/*     $miconexion = new Conexion();
    $miconexion->getConexion(); */
?>