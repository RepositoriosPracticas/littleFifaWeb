<html>
<head>
	<title>Resultados</title>
	<link href="partidos.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="funciones.js"></script>
    <script src="conecta.php"></script>
</head>
<body onload="crearFila()">
<h1>Resultados<h1>
    <select>Seleccione la temporada</select>
    <select>Seleccione la categoria</select>
    <select>Seleccione la jornada</select>
    <select>Seleccione la liga</select>
    
<? 
    include("conecta.php"); 
        $sql="SELECT * FROM lf_resultados WHERE temporada="$temporada", categoria="$categoria", jornada="$jornada", liga="$liga" LIMIT 30";
        $resultado=$mysqli->query($sql);
        $datos=$resultado->fetch_all();
        $num_rows=count($datos);
    for($i=0;$i<$num_rows;$i++){
        $pal=$datos[$i][0];
        ?><script>llenarArrayPal("<?= $pal?>",<?= $i ?>);</script><?
    }
?>

</div>
</body>
</html>