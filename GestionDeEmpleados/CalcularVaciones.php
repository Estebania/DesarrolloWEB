<?php 

function Optener_Vacaciones($fechaDeIngreso){

    $anios = calcularAnios($fechaDeIngreso);
    if($anios > 5){
        $anios = 6;
    }
    switch ($anios) {
        case 0:
            return "No Aplica";
            break;
        case 1:
            return "15 dias";
            break;
        Case 2:
            return "20 dias";
            break;
        Case 3:
             return "25 dias";
            break;
        Case 4:
            return "30 dias";
            break;
        Case 5:
            return "60 dias";
            break;
        Case 6:
            return "90 dias";
            break;
        default:
            return "No hay datos";
            break;
    }

}

function cacularDiasTrabajados($fechaDeIngreso){
    $FechaActual = date('Y-m-d');
   


    $dias = (strtotime($fechaDeIngreso)-strtotime($FechaActual))/86400;
    $dias = abs($dias); 
    $dias = floor($dias);
    return $dias;

}

function calcularAnios($fechaDeIngreso){
    $dias = cacularDiasTrabajados($fechaDeIngreso);

    $anios = $dias/365;
    $anios = floor($anios);
    return $anios;
}

?>