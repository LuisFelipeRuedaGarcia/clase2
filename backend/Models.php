<?php
class Alquiler extends Conectar{
    public function GetClientes(){
        try{

            $Conectar=parent::Conexion();

            parent::SetName();

            $stm=$Conectar->prepare("SELECT * FROM constructoras");

            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return $e->getMessage();

    }
}
}
?>