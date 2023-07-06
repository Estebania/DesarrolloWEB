<?php
include("basedatos.php");
include("validarCedula.php");

if(!empty($_POST['nombre'])&& !empty($_POST['edad'])&& !empty($_POST['empleadoid'])){
    
   
    $CedulaValida = validar_Cedula($_POST['identificacion']);

    if ($CedulaValida == 1) {
    $conexionbd = conectar_bd();
    $query = "UPDATE empleado SET nombre='".$_POST['nombre']."', edad='".$_POST['edad']."', FechaDeIngreso ='".$_POST['fechaIngreso']."', Cargo='".$_POST['cargo']."', Sueldo =".$_POST['sueldo'].", Cedula='".$_POST['identificacion']."'   WHERE id=".$_POST['empleadoid'].";";
    $exequte = mysqli_query($conexionbd,$query);

    if($exequte){
        $location = ;
        header('Location:listaempleados.php');
    }
    else{
       
        
        die("Connection failed: " . mysqli_connect_error());
    }}
    else
    {
        echo "<script> alert('".$_POST['identificacion']." no es una cedula validad'); window.history.back();</script>";
       
    }
    
}
else{
  
    echo 'No hay suficientes datos';
}
?>