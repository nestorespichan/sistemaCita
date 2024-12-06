<?php

require_once "connect_db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ModelRegistro {

  static public function GetRegistros() {
    $stmt = Conexion::conectar()->prepare("SELECT c.*, p.paciente_apellidos, p.paciente_nombres, e.especialidad_nombre, h.horario_hora_inicio, h.horario_hora_fin, es.especialista_nombre FROM tbl_cita c inner join tbl_paciente p on c.paciente_id = p.paciente_id inner join tbl_especialidad e on c.especialidad_id = e.especialidad_id inner join tbl_horario h on c.horario_id = h.horario_id and c.horario_dia = h.horario_id inner join tbl_especialista es on c.especialista_id = es.especialista_id");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  static public function AddRegistro($datos) {
    $stmt = Conexion::conectar()->prepare("INSERT INTO tbl_cita 
      (paciente_id, especialidad_id, especialista_id, cita_fecha, horario_id, horario_dia, cita_estado, usuario_registro, fecha_registro) 
      VALUES 
      (:paciente, :especialidad, :especialista, :fecha, :horario, :dia, 1, :usuario, now())");

    $stmt->bindParam(":paciente", $datos["paciente"], PDO::PARAM_STR);
    $stmt->bindParam(":especialidad", $datos["especialidad"], PDO::PARAM_STR);
    $stmt->bindParam(":especialista", $datos["especialista"], PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
    $stmt->bindParam(":horario", $datos["horario"], PDO::PARAM_STR);
    $stmt->bindParam(":dia", $datos["dia"], PDO::PARAM_STR);
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

  static public function DeleteRegistro($id) {
    $stmt = Conexion::conectar()->prepare("DELETE FROM tbl_cita where cita_id = :id");

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
