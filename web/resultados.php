<html>
<head>
	<title>Resultados</title>
	<link href="partidos.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="index-css.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <meta charset="UTF-8">
	<script type="text/javascript" src="funciones.js"></script>
    <script src="conecta.php"></script>
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
<h1>Resultados<h1>
    <!-- <select>Seleccione la temporada</select>
    <select>Seleccione la categoria</select>
    <select>Seleccione la jornada</select>
    <select>Seleccione la liga</select> -->
    <table id="tabla" name="tabla">
    <tr>
		<td><strong>Equipo 1</strong></td>
		<td><strong>Resultado </strong></td>
		<td><strong>Resultado</strong></td>
		<td><strong>Equipo 2</strong></td>
		<td><strong>Liga</strong></td>
		<td><strong>Temporada</strong></td>
	</tr>
<? 
    include("conecta.php"); 
        $sql="SELECT e1.equipo AS equipo1, e2.equipo AS equipo2, resultado_equipo1, resultado_equipo2, l.nombre as liga, t.nombre as temporada
        FROM lf_resultados
        JOIN lf_equipos e1 ON lf_resultados.equipo1 = e1.id
        JOIN lf_equipos e2 ON lf_resultados.equipo2 = e2.id
        JOIN lf_ligas l ON lf_resultados.liga = l.id
        JOIN lf_temporada t ON lf_resultados.temporada = t.id
        ";
        $resultado=$conn->query($sql);
		if ($resultado->num_rows > 0) {
			while($row = $resultado->fetch_assoc()) {
				$equipo1 = $row['equipo1'];
				$equipo2 = $row['equipo2'];
				$resultado1 = $row['resultado_equipo1'];
				$resultado2 = $row['resultado_equipo2'];
				$liga = $row['liga'];
                $temporada = $row['temporada'];
                $categoria = $row['categoria'];
                
				echo "<tr>";
				echo "<td>". $equipo1 ."</td>";
				echo "<td>". $resultado1 ."</td>";
                echo "<td>". $resultado2 ."</td>";
                echo "<td>". $equipo2 ."</td>";
				echo "<td>". $liga ."</td>";
				echo "<td>". $temporada ."</td>";
			}
		}       
?>
</tr>
</table>

<br><br><br>

</div>
</body>
</html>