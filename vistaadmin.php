
<?php
include ('conexion.php');
$enlace= conexxion();
if($enlace){
    $sql= "SELECT * FROM user_parking";
    $consulta= mysqli_query($enlace, $sql);

    if($consulta){

    }else{
        echo"ERROR EN LA CONSULTA".mysqli_error($enlace);
    }
    mysqli_close($enlace);
}else{
    echo "ERROR AL CONECTAR LA BASE DE DATOS";
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloadmin.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="confirmadm.js" defer></script>
    <title>RESIDENTES ANTURIO</title>
</head>
<body>
    <div class="caja">
        <div class="crear-usuario">
            <form action="insertaruser.php" method="POST" onsubmit="return validar()">
                <h1>CREAR USUARIO</h1>

                <label for="documento">Tipo de Documento:</label>
                <select name="opcion" id="opcion">
                <option value="op">Seleccione un Tipo:</option>
                <option value="CC">C.C</option>
                <option value="PPT">P.P.T</option>
                <option value="CE">C.E</option>
            </select><br><br>

            <label for="documento">Documento:</label>
            <input type="text" name="id" autocomplete="off"><br><br>
            <label for="nombre">Nombre Completo:</label>
            <input type="text" name="nombre" autocomplete="off"><br><br>
            <label for="apellido">Apellidos:</label>
            <input type="text" name="ape" autocomplete="off"><br><br>
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" autocomplete="off"><br><br>
            <label for="correo">Correo:</label>
            <input type="email" name="correo" autocomplete="off"><br><br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contra" autocomplete="off"><br><br>
            <label for="documento">Tipo de Usuario:</label>
            <select name="opcion2" id="opcion2">
            <option value="op2">Seleccione:</option>
            <option value="residente">Residente</option>
            </select><br><br><br>

                <input type="submit" value="Guardar">
</form>
</div>

<div class="usuarios-registrados">
<br><h2>USUARIOS REGISTRADOS</h2>

    <table>
        <thead>
            <tr>
                <th>Tipo de Documento</th>
                <th>Numero de Documento</th>
                <th>Nombre Completo</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Tipo de Usuario</th>
                <th>Actualizar Usuario</th>
                <th>Eliminar Usuario</th>
</tr>
</thead>
</tbody>

<?php while ($fila= mysqli_fetch_array($consulta)): ?>
    <tr>
        <td><?= $fila['Tipo_Documento']?></td>
        <td><?= $fila['ID']?></td>
        <td><?= $fila['Nombre']?></td>
        <td><?= $fila['Apellido']?></td>
        <td><?= $fila['Telefono']?></td>
        <td><?= $fila['Correo']?></td>
        <td><?= $fila['Contrasena']?></td>
        <td><?= $fila['Rol_Id']?></td>
        
        <td><a href="modificar.php?id=<?= $fila['ID'] ?>">Editar</a></td>
        <td><a href="eliminaruser.php?id=<?= $fila['ID'] ?>">Eliminar</a></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
</div>  
</body>
</html>