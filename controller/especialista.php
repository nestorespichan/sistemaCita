<?php

Class ControllerEspecialista {

	static public function GetEspecialistas() {
        $result = ModelEspecialista::GetEspecialistas();
        return $result;
    }

    static public function GetEspecialista($id) {
        $result = ModelEspecialista::GetEspecialista($id);
        return $result;
    }

    static public function AddEspecialista() 
    {
        if(isset($_POST["especialista_nombre"]))
        {
            $datos = array("colegiatura" => $_POST["especialista_colegiatura"],
                "nombre" => $_POST["especialista_nombre"],
                "estado" => "1",
                "usuario" => $_SESSION["SesionAlias"]);   
            $respuesta = ModelEspecialista::AddEspecialista($datos);
            if($respuesta == "ok"){                             
                echo '<script>
                                window.location = "especialista";
                            </script>';
            }           
        }       
    }

    static public function DeleteEspecialista($id) 
    {
      $respuesta = ModelEspecialista::DeleteEspecialista($id);
      return $respuesta;       
    }
}		
