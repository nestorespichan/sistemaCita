<?php

class Conexion {
    static public function conectar() {
        try {
            $link = new PDO(
                "mysql:host=localhost;dbname=db",
                "usuario",
                "clave"
            );
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $link;
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }
}
