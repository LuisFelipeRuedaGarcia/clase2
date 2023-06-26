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
public function Insert($a, $b, $c, $d, $e, $f){
    try {
        $Conectar = parent::Conexion();
        parent::SetName();
        $stm=$Conectar->prepare("INSERT INTO constructoras VALUES(?,?,?,?,?,?)");
        $stm->execute([$a, $b, $c, $d, $e, $f]);
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
}
?>