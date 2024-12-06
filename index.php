<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "controller/plantilla.php"; 
require_once "controller/usuario.php";
require_once "controller/rol.php";
require_once "controller/especialidad.php";
require_once "controller/especialista.php";
require_once "controller/horario.php";
require_once "controller/disponibilidad.php";
require_once "controller/registro.php";

require_once "model/rol.php";
require_once "model/usuario.php";
require_once "model/especialidad.php";
require_once "model/especialista.php";
require_once "model/horario.php";
require_once "model/disponibilidad.php";
require_once "model/registro.php";

$plantilla = new ControllerPlantilla();
$plantilla->CtrlPlantilla();