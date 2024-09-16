<?php
include('conexion.php');
$enlace=conexxion();

$tdocu=$_POST['opcion'];
$id= $_POST['documento'];
$rol=$_POST['opcion2'];
$nombre= $_POST['nombre'];
$ape= $_POST['apellido'];
$tel=$_POST['telefono'];
$correo=$_POST['correo'];
$contra=$_POST['contraseña'];


$sql= "INSERT INTO administracion VALUES( '$tdocu', '$id','$rol', '$nombre', '$ape', '$tel', '$correo', '$contra')";
$consulta=mysqli_query($enlace,$sql);

if($consulta){
    header("location:registroguaryadmin.php");
};
?>