<?php

function conectar_bd(){
    $servidor = "localhost";
    $nombrebd = "empresa";
    $usuario = "root";
    $contrasena = "";

    $conexion =  mysqli_connect($servidor, $usuario, $contrasena,$nombrebd);
    

    return $conexion;

}


?>