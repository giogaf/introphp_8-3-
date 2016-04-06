<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 3</title>
</head>
<body>
	<?php
	$arregloA=array(1810,1981,2000,2016);
	
	foreach ($arregloA as  $numero) {
		$arregloB[]= pow($numero,3);
	}


	echo "<h3>Arreglo A</h3>";

	mostrarArrreglo($arregloA);

	echo "<h3>Arreglo B (elementos arrregloA a la 3)</h3>";

	mostrarArrreglo($arregloB);

	function mostrarArrreglo($arreglo)
	{		
		foreach ($arreglo as  $item) {
			echo $item."<br>";
		}
	}
	
	?>
</body>
</html>