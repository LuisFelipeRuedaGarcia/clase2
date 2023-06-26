<?php

header('Content-Type: application/json');
require_once("Conectar.php");
require_once("Models.php");
$Alquiler=new Alquiler();
$Body = json_decode(file_get_contents("php://input"),true);

switch($_GET["op"]){
    case "GetAll":

        $Datos=$Alquiler->GetClientes();
        echo json_encode($Datos);

    break;
    case "Insert":
        $Alquiler->Insert($Body["id_constructora"],$Body["nombre_constructora"],$Body["nit_constructora"],$Body["nombre_representante"],$Body["email_contacto"],$Body["telefono_contacto"],);

    }

?>