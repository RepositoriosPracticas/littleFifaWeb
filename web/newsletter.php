<!DOCTYPE html>
<html>
<head>
  <title>Suscripción a la Newsletter</title>
    <link href="newsletter.css" rel="stylesheet" type="text/css">
    <script src="conecta.php"></script>
</head>
<body>
  <h1>Suscripción a la Newsletter</h1>
  <form method="post" action="suscripcion.php">
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>
    <button type="submit">Suscribirse</button>
  </form>
  <button onclick="location.href='index.php'">Volver a la página principal.</button>
</body>
</html>