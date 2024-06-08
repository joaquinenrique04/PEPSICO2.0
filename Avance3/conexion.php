<?php
// Datos de conexión a la base de datos
$user = "root";
$pass = "";
$host = "localhost:3306"; // Si estás utilizando un puerto diferente, asegúrate de que sea el correcto
$bd = "bdpepsico";

// Conexión a la base de datos
$connection = mysqli_connect($host, $user, $pass, $bd);

// Verificamos la conexión a la base de datos
if (!$connection) {
    die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
} else {
    echo "<b><h3>Hemos conectado al servidor</h3></b>";
}

// Cerramos la conexión a la base de datos
mysqli_close($connection);
?>
