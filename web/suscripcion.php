<?php
// Obtener los datos del formulario
$email = $_POST['email'];

include("conecta.php");
		$sql = "INSERT INTO lf_newsletter (correo) VALUES ('$email')";

        if(mysqli_query($conn, $sql)) {
            echo "Suscripción exitosa. Gracias por suscribirte a nuestra newsletter.";
        } else {
            echo "Error al suscribirse. Por favor, inténtalo nuevamente.";
        }

// Mostrar el mensaje de confirmación y redirigir a la página principal
echo '<script>alert("Se ha registrado su correo para recibir notificaciones de nuestra newsletter"); window.location = "index.html";</script>';
?>
