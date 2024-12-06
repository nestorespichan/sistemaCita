<?php

class ControllerEspecialidad {
    
    static public function GetEspecialidades() {
        $result = ModelEspecialidad::GetEspecialidades();
        return $result;
    }

    static public function GetEspecialidad($id) {
        $result = ModelRol::GetEspecialidad($id);
        return $result;
    }

    static public function AddEspecialidad() 
    {
        if(isset($_POST["especialidad_nombre"]))
        {
            $datos = array("nombre" => $_POST["especialidad_nombre"],
                "estado" => "1",
                "usuario" => $_SESSION["SesionAlias"]);   
            $respuesta = ModelEspecialidad::AddEspecialidad($datos);
            if($respuesta == "ok"){                             
                echo '<script>
                                window.location = "especialidad";
                            </script>';
            }           
        }       
    }

    static public function DeleteEspecialidad($id) 
    {
      $respuesta = ModelRol::DeleteEspecialidad($id);
      return $respuesta;       
    }
}
