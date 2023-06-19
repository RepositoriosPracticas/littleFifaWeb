<?
// Datos de conexión a la base de datos
$servername = "mysql.piglesias.colexio-karbo.com";
$username = "karbo_piglesias";
$password = "Alumno*2021";
$dbname = "karbo_piglesias";

// Crear conexión

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Verificar la conexión

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>