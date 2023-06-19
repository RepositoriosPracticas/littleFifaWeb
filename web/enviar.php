<?php
// Obtener los datos del formulario
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Realizar el procesamiento y envío del mensaje aquí
// ...

// Mostrar el mensaje de confirmación y redirigir a la página principal
echo '<script>alert("Se ha enviado su mensaje y se le responderá lo antes posible"); window.location = "index.html";</script>';
?>
