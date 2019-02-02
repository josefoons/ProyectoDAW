<?php
    class Conexion{
        private $id;
        private $nick;
        private $mail;
        private $pais;
        private $idioma;
        private $elo;
        private $rolPreferido;
        private $rolBuscado;
        private $region;
        private $mensaje;
        private $rolWeb;

        public function __construct($id, $nick, $mail, $pais, $idioma, $elo, $rolPreferido, $rolBuscado, $region, $mensaje, $rolWeb = 0){
            $this->id = $id;
            $this->nick = $nick;
            $this->mail = $mail;
            $this->pais = $pais;
            $this->idioma = $idioma;
            $this->elo = $elo;
            $this->rolPreferido = $rolPreferido;
            $this->rolBuscado = $rolBuscado;
            $this->region = $region;
            $this->mensaje = $mensaje;
            $this->rolWeb = $rolWeb;
        }

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNick(){
            return $this->nick;
        }
    
        public function setNick($nick){
            $this->nick = $nick;
        }
    
        public function getMail(){
            return $this->mail;
        }
    
        public function setMail($mail){
            $this->mail = $mail;
        }
    
        public function getPais(){
            return $this->pais;
        }
    
        public function setPais($pais){
            $this->pais = $pais;
        }
    
        public function getIdioma(){
            return $this->idioma;
        }
    
        public function setIdioma($idioma){
            $this->idioma = $idioma;
        }
    
        public function getElo(){
            return $this->elo;
        }
    
        public function setElo($elo){
            $this->elo = $elo;
        }
    
        public function getRolPreferido(){
            return $this->rolPreferido;
        }
    
        public function setRolPreferido($rolPreferido){
            $this->rolPreferido = $rolPreferido;
        }
    
        public function getRolBuscado(){
            return $this->rolBuscado;
        }
    
        public function setRolBuscado($rolBuscado){
            $this->rolBuscado = $rolBuscado;
        }
    
        public function getRegion(){
            return $this->region;
        }
    
        public function setRegion($region){
            $this->region = $region;
        }
    
        public function getMensaje(){
            return $this->mensaje;
        }
    
        public function setMensaje($mensaje){
            $this->mensaje = $mensaje;
        }
    
        public function getRolWeb(){
            return $this->rolWeb;
        }
    
        public function setRolWeb($rolWeb){
            $this->rolWeb = $rolWeb;
        }
    

    }
?>