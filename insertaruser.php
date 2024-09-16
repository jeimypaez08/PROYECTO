<?php
include('conexion.php');
$enlace=conexxion();

$tdocu=$_POST['opcion'];
$id= $_POST['id'];
$nombre= $_POST['nombre'];
$ape= $_POST['ape'];
$tel=$_POST['telefono'];
$correo=$_POST['correo'];
$contra=$_POST['contra'];
$tusuario=$_POST['opcion2'];


$sql= "INSERT INTO user_parking VALUES( '$tdocu', '$id', '$nombre', '$ape', '$tel', '$correo', '$contra', '$tusuario')";
$consulta=mysqli_query($enlace,$sql);

if($consulta){
    header("location:vistaadmin.php");
};
?>