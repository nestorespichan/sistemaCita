<?php

require_once "connect_db.php";

class ModelUsuario {
  static public function GetUsuarios() {
    $stmt = Conexion::conectar()->prepare("SELECT u.*, r.rol_nombre FROM tbl_usuario u inner join tbl_rol r on u.rol_id = r.rol_id");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  static public function GetLogin($correo, $clave) {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM tbl_usuario WHERE usuario_correo = :correo AND  usuario_clave = :clave AND usuario_estado = 1");
    $stmt->execute([
        ':correo' => $correo,
        ':clave' => $clave
    ]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
