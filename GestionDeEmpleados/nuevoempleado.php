<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registrar Empleado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="userform">
<h1 class="Titulo">Nuevo Empleado</h1>
    <form method="post" action="agrearempleado.php" >
        <div class="Campos">
        <label>Nombre</label><input type="text" name="nombre" required></br>
        <label>Edad</label><input type="text" name="edad" required></br>
        <label>Fecha de Ingreso</label><input type="date" name="fechaIngeso" placeholder="YYYY-MM-DD" required></br>
        <label>Cargo</label><input type="text" name="cargo" required></br>
        <label>Sueldo</label><input type="text" name="sueldo" required ></br>
        <label>Identificacion</label><input type="text" name="identificacion" required maxlength="11"></br>
        </div>
        </br>
        <input type="submit" value="Enviar" class="Enviar"> <input type="button" onclick="location.href='index.php'" name="volver atrás" value="Ir al menu" class="volerMenu"/>
        
    </form>
    </div>
</body>
</html>