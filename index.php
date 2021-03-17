<!DOCTYPE html>
<?php
include('conexion.php');
?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatble" content="IE-edge">
	<meta name="viewport" content="width=dvice-width">
	<title>INTRO PHP</title>
</head>
<body>
	<h1>MANEJADOR DE TAREAS</h1>
	<form action="store.php" method="POST">
		<label for="tarea">Nombre de Tarea</label><br>
		<input type="text" name="tarea">
		<br>
		<label for="descripcion">Descrpcion</label><br>
		<textarea name="descripcion" cols="30" rows="3"></textarea>
		<br>
		<label for="prioridad">Prioridad</label><br>
		<select name="prioridad">
		    <option value="Alta">Alta</option>
		    <option value="Media">Media</option>
		    <option value="Baja">Baja</option>
		</select>
		<br>
		<input type="checkbox" name="urgente" value="1">
		<label for="urgente">Urgente</label>
		<br>
		<input type="radio" name="tipo" value="escuela">
		<label for="tipo">Escuela</label>
		<br>
		<input type="radio" name="tipo" value="trabajo">
		<label for="tipo">Trabajo</label>
		<br>
		<input type="submit" name="Enviar">

	</form>
	<hr>
	<h2>Lista de Tareas</h2>
	<?php

	  $sql = "SELECT * FROM tareas";
	  $stmt = $conn->prepare($sql);
	  $stmt->execute();

	  $stmt->setFetchMode(PDO::FETCH_ASSOC);

	  echo "<table border ='1'>";
	  echo "<tr> <th>ID</th> <th>Tarea</th> <th>Descripcion</th> </tr>";
	  foreach ($stmt->fetchAll() as $tareas){
		  echo "<tr>
		  		<td>" . $tareas['id'] . "</td>
				<td>" . $tareas['tarea'] . "</td>
				<td>" . $tareas['descripcion'] . "</td>	
		  </tr>";
	  }
	  echo "</table>";
	?>


</body>
</html>