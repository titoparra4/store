<?php

    class Conectar {

        protected $dbh;

        public function conexion(){

        try {
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=dbproyecto","root","root");

            return $conectar;

        } catch (Exception $e) {
            
            print "!Error con la conexion a la base de datos" .$e->getMessage() . "<br />";
            die();
        }


    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public function ruta(){
        return "http://localhost:81/store/"
    }

}


?>