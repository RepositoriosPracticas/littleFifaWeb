<html>
<head>
	<title>Resultados</title>
	<link href="partidos.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="index-css.css">
    <link rel="icon" type="image/png" href="favicon.png">
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
<h1>Resultados<h1>
    <!-- <select>Seleccione la temporada</select>
    <select>Seleccione la categoria</select>
    <select>Seleccione la jornada</select>
    <select>Seleccione la liga</select> -->
    
<? 
    include("conecta.php"); 
        $sql="SELECT equipo1, equipo2, resultado_equipo1, resultado_equipo2, liga, temporada, categoria FROM lf_resultados";
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
                
                echo "<table";
				echo "<tr>";
				echo "<td>". $equipo1 ."</td>";
				echo "<td>". $resultado1 ."</td>";
                echo "<td>". $equipo2 ."</td>";
				echo "<td>". $resultado2 ."</td>";
				echo "<td>". $liga ."</td>";
				echo "<td>". $temporada ."</td>";
				echo "<td>". $categoria ."</td>";
				echo "</tr>";
                echo "</table>";
			}
		}
        
?>

</div>
</body>
</html>