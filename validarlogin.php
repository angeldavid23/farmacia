<?php
include('conexion.php');
$usuario=$_POST['usuario'];

session_start();
$_SESSION['usuario']=$_POST['usuario'];

$usuario=$_SESSION['usuario'];


$conexion=mysqli_connect($servidorBD, $usuarioBD, $contraBD, $baseDatos)or die ('Error');

$consulta="SELECT `Id_Usario` FROM `usuarios` WHERE `Id_Usario` = '$usuario'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    echo "<script>alert('Bienvenido al Sistema')</script>";
    include("principal.php");
}else{

    include("index.html");
    echo "<script>alert('Datos Incorrectos')</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>