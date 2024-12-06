<?php

Class ControllerDisponibilidad {

	static public function GetDisponibilidad() {
        $result = ModelDisponibilidad::GetDisponibilidad();
        return $result;
    }
}		
