<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Bajas</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>
<body>

<div class="container">
	<h3 class="altaTitulo" style="text-align: center;">FORMULARIO DE BAJA</h3>
	<form class="altaInput" action="../servidor/bajas.php" method="POST" >
	    <div class="grupoInputs">
		<label for="usuario">Usuario:</label>
        <input type="text" name="usuario"><br>	
        </div>
		
		<div class="btn-submit">
		<input type="submit" value="Eliminar"><br>
        </div>
	</form>
</div>
	
</body>
</html>