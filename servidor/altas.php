
<html lang="es">
	<head>
	<link rel="stylesheet" href="../css/altaBajaModificacion.css">
	</head>
	<body>	
	<a href="../pag_web/form-altas.php">Volver</a>

</body>
</html>


<?php 

include '../pag_web/menu.php';

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];
$us = $_POST['usuario'];

// salida de informacion

echo "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>". "<h3>".$us."</h3>";

if($foto != "none")
{
	$fp = fopen($foto,"rb");
	$contenido = fread($fp,$fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "gestionsubir";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO persona(apellido, nombre, edad,foto, usuario) VALUES ('$ape','$nom','$ed','$contenido', '$us')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	print "se ha insertado un registro"."<br>";

}else{
	print "NO se ha generado un registro"."<br>";
}

}
else
print "No se puede subir el archivo";

 ?>
