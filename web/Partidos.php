<html>
<head>
	<title>Partidos</title>
	<link href="partidos.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="index-css.css">
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
  <br><br>
  <h1>Partidos<h1>
<table id="tabla" name="tabla">
	<tr>
			<td><strong>Equipo 1</strong></td>
			<td><strong>Equipo 2</strong></td>
			<td><strong>Fecha</strong></td>
			<td><strong>Hora</strong></td>
			<td><strong>Liga</strong></td>
			<td><strong>Temporada</strong></td>
		</tr>
<?php
		include("conecta.php");
		$sql = "SELECT  e1.equipo AS equipo1,  e2.equipo AS equipo2, fecha, hora, l.nombre as liga, t.nombre as temporada 
		FROM lf_partidos
		 JOIN lf_equipos e1 ON lf_partidos.equipo1 = e1.id
		 JOIN lf_equipos e2 ON lf_partidos.equipo2 = e2.id
		 JOIN lf_ligas l ON lf_partidos.liga = l.id
		 JOIN lf_temporada t ON lf_partidos.temporada = t.id
		 WHERE fecha > CURRENT_DATE
		 ORDER BY fecha
		";
		$resultado = $conn->query($sql);
		if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
				$equipo1 = $row['equipo1'];
				$equipo2 = $row['equipo2'];
				$fecha = $row['fecha'];
				$hora = $row['hora'];
				$categoria = $row['categoria'];
				$liga = $row['liga'];
				$temporada = $row['temporada'];

				echo "<tr>";
				echo "<td>". $equipo1 ."</td>";
				echo "<td>". $equipo2 ."</td>";
				echo "<td>". $fecha ."</td>";
				echo "<td>". $hora ."</td>";
				echo "<td>". $liga ."</td>";
				echo "<td>". $temporada ."</td>";
			}
		}
		?>
		</tr>
		</table>

		<br><br><br>
</body>
</html>
