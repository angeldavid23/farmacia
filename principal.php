<?php
include('conexion.php');
$_SESSION['usuario'];
$usuario=$_SESSION['usuario'];
$conexion=mysqli_connect($servidorBD, $usuarioBD, $contraBD, $baseDatos)or die ('Error');
$mysqli = new mysqli($servidorBD, $usuarioBD, $contraBD, $baseDatos);
$consulta2="SELECT `Id_Usario` FROM `usuarios` WHERE `Id_Usario` = '$usuario'";
$resultado2=mysqli_query($conexion,$consulta2);
$fila2=mysqli_num_rows($resultado2);
if($fila2>0){
	
}
else{
  header("logincatedraticos.php");
  echo "<script>alert('Acceso Denegado')</script>";
    exit();
};
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FARMACIA</title>
	<link rel="stylesheet" href="css/principal.css">
</head>
<body>
			<?php
			$conexion=mysqli_connect($servidorBD, $usuarioBD, $contraBD, $baseDatos)or die ('Error');
			$mysqli = new mysqli($servidorBD, $usuarioBD, $contraBD, $baseDatos);
			
			$buscaralumno = "SELECT `Id_Usario`, `foto` FROM `usuarios`  WHERE `Id_Usario` = $usuario ";
			$resultado4=mysqli_query($conexion,$buscaralumno);
			$fila2=mysqli_num_rows($resultado4);
			if($fila2>0){
			  if ($result = $mysqli->query($buscaralumno)) {
				while ($row = $result->fetch_assoc()) {
					$zonaingresada = $row["Id_Usario"];
					$fotocodificada = $row["foto"];
				}
			}
		}
			?>
			<div style="text-align: center;">


			 <?php
					$encoded_image = base64_encode($fotocodificada);
					//You dont need to decode it again.
					
					$Hinh = "<img src='data:image/jpeg;base64,{$encoded_image}'  width=\"500px\" height=\"650px\"";
					
					//and you echo $Hinh
					echo $Hinh;
					?>
					</img>
			</div>

</body>
</html>