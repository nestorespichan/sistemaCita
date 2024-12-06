<?php

require_once "connect_db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ModelEspecialidad {
  static public function GetEspecialidades() {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM tbl_especialidad");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public static function GetEspecialidad($id) {
    try {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM tbl_especialidad");
        //$stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        throw new Exception("Error en la consulta: " . $e->getMessage());
    }
}


  static public function AddEspecialidad($datos) {
    $stmt = Conexion::conectar()->prepare("INSERT INTO tbl_especialidad 
      (especialidad_nombre, especialidad_estado, usuario_registro, fecha_registro) 
      VALUES 
      (:nombre, :estado, :usuario, now())");

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

  static public function DeleteRol($id) {
    $stmt = Conexion::conectar()->prepare("DELETE FROM tbl_especialidad WHERE especialidad_id = :id"); 
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
