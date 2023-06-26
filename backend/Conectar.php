<?php
class Conectar{
    protected $Db;
    protected function Conexion(){
        try {
            $Conectar = $this->Db = new PDO("mysql:local=localhost;dbname=AlquilArtemisMaicolClass","campus","campus2023");
            return $Conectar;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function  SetName(){
        return $this->Db->query("SET NAMES 'utf8'");
    }
}
?>