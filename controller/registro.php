<?php

class ControllerRegistro {
    
    static public function GetRegistros() {
        $result = ModelRegistro::GetRegistros();
        return $result;
    }   

    static public function AddRegistro() 
    {
        if(isset($_POST["rol_nombre"]))
        {
            $datos = array("paciente" => $_POST["paciente_id"],
                "especialidad" => $_POST["especialidad_id"],
                "especialista" => $_POST["especialista_id"],
                "fecha" => $_POST["fecha"],
                "horario" => $_POST["horario_id"],
                "dia" => $_POST["diae_id"],
                "estado" => "1",
                "usuario" => $_SESSION["SesionAlias"]);   

            $respuesta = ModelRegistro::AddRegistro($datos);
            if($respuesta == "ok"){                             
                echo '<script>
                                window.location = "reigstro";
                            </script>';
            }           
        }       
    }

    static public function DeleteRegistro($id) 
    {
      $respuesta = ModelRegistro::DeleteRegistro($id);
      return $respuesta;       
    } 
}
