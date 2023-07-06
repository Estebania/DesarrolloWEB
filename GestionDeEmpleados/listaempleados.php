<!DOCTYPE html>
<?php
include("basedatos.php");
$conexionbd = conectar_bd();

$query = "SELECT id,nombre,edad,Cargo,Sueldo,Cedula, FechaDeIngreso  FROM empleado;";
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
    <h1 class='Titulo'>Lista de empleados</h1>
    <div>
     <form method="get" >
    <table class="grid">
    
        <?php 
        echo '<tr class="encabezado"><td>Empleado</td> <td>Edad</td> <td>Cargo</td> <td>Sueldo</td>  <td>Identidicacion</td> <td>Fecha de ingreso </td><td colspan="2">Operaciones</tr>';
        while ($registro = mysqli_fetch_assoc($resultado)) {

            echo '<tr class="filas"><td>'.strtoupper($registro['nombre']).'</td>  <td>'.$registro['edad'].' </td> <td>'.strtoupper($registro['Cargo']).'</td> <td>'.$registro['Sueldo'].'</td>';
            echo '<td>'.$registro['Cedula'].'</td>  <td>'.$registro['FechaDeIngreso'].'</td>';
            echo '<td class ="boton"><a href ="modificarempleado.php?empleadoid=' . $registro['id'] . '">Modificar  </a></td>';
            echo '<td class ="boton"><a href ="eliminarempleado.php?empleadoid=' . $registro['id'] . '" onclick="return confirm(\'Eliminar Empleado?\')">Eliminar</a></li></div></td></tr>';
        }
        ?>
    </table>
    </form>
    </div>
    <div><input type="button" onclick="location.href='index.php'" name="volver atrás" value="Ir al menu"  class="volerMenu" /></div>
    </div>
</body>
</html>