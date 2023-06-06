<?php

    include("conecta.php");
    // Preparar la consulta SQL para insertar el correo en la base de datos
    $sql = "INSERT INTO lf_newsletter (correo) VALUES ('$email')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
    // Mostrar un mensaje de éxito
        echo "Gracias por suscribirte a nuestra newsletter";
    } else {
    // Mostrar un mensaje de error si la consulta no se pudo ejecutar
        echo "Error al suscribirse, intentalo de nuevo ";
    }
    //redirecciono al index.html
    header("Location: index.html");
    // Cerrar la conexión a la base de datos
    $conn->close();
?>