<?php
include("basedatos.php");
include("validarCedula.php");


if(!empty($_POST['nombre'])&& !empty($_POST['edad'])){


    $CedulaValida = validar_Cedula($_POST['identificacion']);

    if ($CedulaValida == 1) {
        $conexionbd = conectar_bd();


        $query = "INSERT INTO empleado (nombre,edad,FechaDeIngreso,Cargo, Sueldo,Cedula) VALUES ('" . $_POST['nombre'] . "','" . $_POST['edad'] . "','".$_POST['fechaIngesoad']."','".$_POST['cargo']."',". $_POST['sueldo'].",'". $_POST['identificacion']."');";
         $exequte = mysqli_query($conexionbd,$query);

         if($exequte){
        header('Location:listaempleados.php');
        }
        else{
        header('Location:nuevoempleado.php');
         }

    }
    else
    {
        echo "<script> alert('".$_POST['identificacion']." no es una cedula validad'); window.history.back();</script>";
       
    }

    
}
else{
    header('Location:nuevoempleado.php');
}
?>