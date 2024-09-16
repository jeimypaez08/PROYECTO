<?php
function conexxion(){
$conexion= mysqli_connect("localhost","root", "");
if(!$conexion){
    echo"ERROR. No  se conecto a MYSQL.";
    exit;
}

$bd= mysqli_select_db($conexion,"pcc");
if(!$bd){
    echo"ERROR. No se selecciono la base de datos.";
    exit;
}
return $conexion;
}
?>