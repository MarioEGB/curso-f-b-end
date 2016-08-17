
<?php 
	echo "<h2>Hola Mundo</h2>";
	$dia =24;
	$double =74.5;
	$nombre = "jose";
	$existe = true;

	$suma =$dia+$double;
	
	echo  "variable entera ".$dia;
	
	echo  "<br>"."suma ".$suma;
	
	echo "<br>"."nombre ".$nombre;
	
	echo "<br>"."variable boolena ".$existe;

	//arreglo
	$clave["ana"]="hola213";
	$clave["juan"]="456hola213";
	$clave["valeria"]="789hola213";
	$clave["omar"]="109hola213";

	echo "<br>";

	foreach ($clave as $key => $value) {
		echo "la clave de ".$key." es: ".$value."<br>";
	}

	/*for ($i=0;$i< sizeof($clave);$i++){
		echo "clave ".$clave[$i]."<br>";
	}*/

	$day = date("d/m/y h:i:s A");
	echo $day;
	$inicio =1;
	/*while($inicio<=$day){
		echo $inicio."<br>";
		$inicio++;
	}*/
	

 ?>
