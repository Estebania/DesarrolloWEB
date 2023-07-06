<!DOCTYPE html>
<?php
include("basedatos.php");
include("CalcularVaciones.php");
$conexionbd = conectar_bd();

$query = "SELECT id,nombre,Cargo , FechaDeIngreso  FROM empleado;";
$resultado = mysqli_query($conexionbd, $query);
mysqli_close($conexionbd);

?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="ContenedorLista">
    <h1 class='Titulo'>Vacaciones</h1>
    <div>
     <form method="get" class="grid">
    <table class="grid">
    
        <?php 
            echo '<tr class="encabezado"><td>Empleado</td> <td>Cargo</td> <td>Fecha De Ingreso</td> <td>Dias Correspondientes</td></tr>';
        while ($registro = mysqli_fetch_assoc($resultado)) {
            echo '<tr class="filas"><td>'.strtoupper($registro['nombre']).'</td>  <td>'.strtoupper($registro['Cargo']).'</td> ';
            echo '<td>'.$registro['FechaDeIngreso'].'</td>';
            echo '<td >' . Optener_Vacaciones($registro['FechaDeIngreso']) . '</td></tr>';
           
        }
        ?>
    </table>
    </form>
    </div>
    <div><input type="button" onclick="history.back()" name="volver atrás" value="Ir al menu" class="volerMenu" /></div>
    <div>
</body>
</html>