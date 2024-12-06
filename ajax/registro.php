<?php

require_once "../controller/registro.php";
require_once "../model/registro.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

class AjaxRegistro {
    public $id;

    public function AjaxConsultar() {
		    try {
		        $respuesta = ControllerRegistro::GetRegistros();
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
    $rol = new AjaxRegistro();
    $rol->id = $_POST["idConsultar"];
    $rol->AjaxConsultar();
}
