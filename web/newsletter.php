<html>
<head>
  <title>Suscripción a la Newsletter</title>
    <link href="newsletter.css" rel="stylesheet" type="text/css">
    <script src="conecta.php"></script>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
<header>
    <nav>
      <ul class="menu">
        <li><a href="index.html" onmouseover="resaltarTexto(this)" onmouseout="restaurarTexto(this)">Página principal</a></li>
        <li><a href="partidos.php" onmouseover="resaltarTexto(this)" onmouseout="restaurarTexto(this)">Partidos</a></li>
        <li><a href="resultados.php" onmouseover="resaltarTexto(this)" onmouseout="restaurarTexto(this)">Resultados</a></li>
        <li><a href="newsletter.php" onmouseover="resaltarTexto(this)" onmouseout="restaurarTexto(this)">Newsletter</a></li>
      </ul>
    </nav>
  </header>
  <h1><strong><u>Suscripción a la newsletter</strong></u></h1>
  <form method="post" action="suscripcion.php">
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>
    <button type="submit">Suscribirse</button>
  </form>
  <br><br>
<label><strong>Suscribete a nuestra newsletter para no perderte nunca el resultado de ningún partido!</strong></label>

<br><br><br>

</body>
</html>
