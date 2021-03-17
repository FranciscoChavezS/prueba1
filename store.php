<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "prueba1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

//validar recepcion de datos
if (!empty($_POST['tarea'])) {
    //Recibir datos
    $tarea = $_POST['tarea'];
    $descripcion = $_POST['descripcion'];
    $prioridad = $_POST['prioridad'];
    $urgente = $_POST['urgente'];
    $tipo = $_POST['tipo'];

    //Validar datos

    //Guardar datos a la BD
    $sql = "INSERT INTO tareas (tarea,descripcion, prioridad, urgente, tipo) VALUES ('$tarea','$descripcion', '$prioridad', '$urgente', '$tipo')";

    //Use exect() because no results are returned
    $conn->exec($sql);

    //Redireccionar
    header('Location: index.php');

} else {
  echo "No hay datos enviados";
}

?>