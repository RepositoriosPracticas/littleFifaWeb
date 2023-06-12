<html>
<head>
	<title>Partidos</title>
	<link href="partidos.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="funciones.js"></script>
</head>
<body onload="crearFila()">
	<form action="index.php" method="post">
		<table id="tabla" name="tabla">
			<tr><td><strong>Equipo 1</strong></td><td><strong>Equipo 2</strong></td><td><strong>Fecha</strong></td><td><strong>Hora</strong></td><td><strong>Categoria</strong></td><td><strong>Liga</strong></td><td><strong>Temporada</strong></td></tr>
		</table>
	</form>
</div>

<? 

	
	//NOS CONECTAMOS A LA BDD Y COGEMOS LOS PARTIDOS
	
	include("conecta.php");
		$sql="SELECT equipo1, equipo2, fecha, hora, categoria, liga, temporada FROM tabla_partidos LIMIT 30";
		$resultado=$mysqli->query($sql);
		$datos=$resultado->fetch_all();
		$num_rows=count($datos);
	for($i=0;$i<$num_rows;$i++){
		$pal=$datos[$i][0];
		?><script>llenarArrayPal("<?= $pal?>",<?= $i ?>);
		</script><?
	}
	
?>
</div>
</body>
</html>