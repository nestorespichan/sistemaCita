<?php

class ControllerRol {
    
    static public function GetRoles() {
        $result = ModelRol::GetRoles();
        return $result;
    }

    static public function GetRol($id) {
        $result = ModelRol::GetRol($id);
        return $result;
    }

    static public function AddRol() 
    {
        if(isset($_POST["rol_nombre"]))
        {
            $datos = array("nombre" => $_POST["rol_nombre"],
                "estado" => "1",
                "usuario" => $_SESSION["SesionAlias"]);   
            $respuesta = ModelRol::AddRol($datos);
            if($respuesta == "ok"){                             
                echo '<script>
                                window.location = "rol";
                            </script>';
            }           
        }       
    }

    static public function DeleteRol($id) 
    {
      $respuesta = ModelRol::DeleteRol($id);
      return $respuesta;       
    }
}
