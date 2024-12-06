<?php

class ControllerHorario {
    
    static public function GetHorarios() {
        $result = ModelHorario::GetHorarios();
        return $result;
    }

}
