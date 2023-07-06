<!DOCTYPE html>
<?php
include("basedatos.php");
$conexionbd = conectar_bd();

$query = "SELECT id,nombre,edad,FechaDeIngreso,Cargo,Sueldo,Cedula FROM empleado WHERE id=".$_GET['empleadoid']." LIMIT 1;";
$resultado = mysqli_query($conexionbd, $query);
mysqli_close($conexionbd);

$registro= mysqli_fetch_assoc($resultado);

?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Modificar Empleado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="userform">
    <h1 class="Titulo">Modificar Empleado</h1>
    <form method="post" action="actualizarempleado.php" class='lista'>
    <div class="Campos">
        <label>Nombre</label><input type="text" name="nombre" value="<?php echo $registro['nombre']?>"></br>
        <label>Edad</label><input type="number" name="edad" value="<?php echo $registro['edad']?>"></br>
        <label>Fecha de Ingreso  </label><input type="date" name="fechaIngreso" value="<?php echo $registro['FechaDeIngreso']?>"></br>
        <label>Cargo  </label><input type="text" name="cargo" value="<?php echo $registro['Cargo']?>"></br>
        <label>Sueldo </label><input type="text" name="sueldo"  value="<?php echo $registro['Sueldo']?>"></br>
        <label>Identificacion </label><input type="text" name="identificacion"  maxlength="11" value="<?php echo $registro['Cedula']?>"></br>
        </div>
        </br>
        <input type="hidden" name="empleadoid" value="<?php echo $registro['id']?>">
        <input type="submit" value="Actualizar Empleado" class="Enviar"> <input type="button" onclick="location.href='listaempleados.php'" name="volver atrás" value="volver atrás" class="volerMenu"/>
        
    </form>
    </div>
</br>
    <div></div>
</body>
</html>