<?php

Class ControllerUsuario {

	static public function Login() 
	{
		try {
			if (isset($_POST["txtCorreo"])) {
				$correo = $_POST["txtCorreo"];
				$clave = md5($_POST["txtClave"]);
				$respuesta = ModelUsuario::GetLogin($correo, $clave);
				if (empty($respuesta)) {
					$mensaje = '<br><br><div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        			<span aria-hidden="true">&times;</span>
						</button>
      			<strong>Alerta - </strong> Datos incorrectos.!!!
					</div>';
					print_r($mensaje);
				} else {		
					$usuario = $respuesta[0];
					$nombre = explode('@', $correo)[0];
					$_SESSION["SesionActiva"] = "true";
					$_SESSION["SesionId"] = $usuario['usuario_id'];
					$_SESSION["SesionAlias"] = $nombre;
          $_SESSION["SesionRol"] = $usuario['rol_id'];
          $_SESSION["SesionCorreo"] = $usuario['usuario_correo'];
          $_SESSION["SesionNombre"] = $usuario['usuario_nombres'];
					echo '<script>window.location = "inicio";</script>';
				}
			}		
		} catch (Exception $e) {
        echo "Error general: " . $e->getMessage();
    }
	}

	static public function GetUsuarios() {
        $result = ModelUsuario::GetUsuarios();
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
