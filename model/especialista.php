<?php

require_once "connect_db.php";

class ModelEspecialista {
  static public function GetEspecialistas() {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM tbl_especialista");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  static public function AddEspecialista($datos) {
    $stmt = Conexion::conectar()->prepare("INSERT INTO tbl_especialista 
      (especialista_colegiatura, especialista_nombre, especialista_estado, usuario_registro, fecha_registro) 
      VALUES 
      (:colegiatura, :nombre, :estado, :usuario, now())");

    $stmt->bindParam(":colegiatura", $datos["colegiatura"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

    if ($stmt->execute())
    {
      return "ok";  
    } 
    else
    {
      return "error";   
    }
    $stmt->close();   
    $stmt = null;
  }

  static public function DeleteEspecialista($id) {
    $stmt = Conexion::conectar()->prepare("DELETE FROM tbl_especialista WHERE especialista_id = :id"); 
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    if ($stmt->execute())
    {
      return "ok";  
    } 
    else
    {
      return "error";   
    }
    $stmt->close();   
    $stmt = null;
  }
}
