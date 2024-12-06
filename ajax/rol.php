<?php

require_once "../controller/rol.php";
require_once "../model/rol.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

class AjaxRol {
    public $id;

    public function AjaxEditar() {
		    try {
		    		echo '<script>alert('.$this->id.')</script>';
		        $respuesta = ControllerRol::GetRol($this->id);
		        echo json_encode([
		                "status" => "success",
		                "data" => $respuesta
		            ]);
		        /*if ($respuesta) {
		            echo json_encode([
		                "status" => "success",
		                "data" => $respuesta
		            ]);
		        } else {
		            echo json_encode([
		                "status" => "error",
		                "message" => "No se encontraron datos para el ID proporcionado."
		            ]);
		        }*/
		    } catch (Exception $e) {
		        echo json_encode([
		            "status" => "error",
		            "message" => $e->getMessage()
		        ]);
		    }
		    exit();
		}



    public function AjaxEliminar() {
        $resultado = ControllerRol::DeleteRol($this->id);
        if ($resultado) {
            echo json_encode([
                "status" => "success",
                "message" => "Rol eliminado correctamente."
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "No se pudo eliminar el rol."
            ]);
        }
        exit();
    }
}


if (isset($_POST["idEditar"])) {
    $rol = new AjaxRol();
    $rol->id = $_POST["idEditar"];
    $rol->AjaxEditar();
}

if (isset($_POST["idBorrar"])) {
    $rol = new AjaxRol();
    $rol->id = $_POST["idBorrar"];
    $rol->AjaxEliminar();
}

