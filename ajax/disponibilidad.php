<?php

require_once "../controller/disponibilidad.php";
require_once "../model/disponibilidad.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

class AjaxDisponiblidad {
    public $id;

    public function AjaxConsultar() {
		    try {
		        $respuesta = ControllerDisponibilidad::GetDisponibilidad();
		        echo json_encode([
		                "status" => "success",
		                "data" => $respuesta
		            ]);
		    } catch (Exception $e) {
		        echo json_encode([
		            "status" => "error",
		            "message" => $e->getMessage()
		        ]);
		    }
		}



}


if (isset($_POST["idConsultar"])) {
    $rol = new AjaxDisponiblidad();
    $rol->id = $_POST["idConsultar"];
    $rol->AjaxConsultar();
}
