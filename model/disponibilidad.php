<?php

require_once "connect_db.php";

class ModelDisponibilidad {
  static public function GetDisponibilidad() {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM tbl_horario h
      LEFT JOIN (SELECT horario_id, horario_dia
                  FROM tbl_especialista_disponiblidad
                  WHERE especialista_id = 1) b on
        h.horario_id = b.horario_id
        AND h.horario_dia = b.horario_dia");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

}
