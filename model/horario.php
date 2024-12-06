<?php

require_once "connect_db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ModelHorario {
  static public function GetHorarios() {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM tbl_horario where horario_dia = 1");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
