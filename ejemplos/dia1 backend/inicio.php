<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Operaciones con numeros complejos</title>
</head>
<body>
 	<h1>Dame dos numeros imaginarios</h1>
	<form action="haz.php" method="post">
		Numero 1:<input type="number" name="real1">+ <input type="number" name="imag1"> i <br>
		Numero 2:<input type="number" name="real2">+ <input type="number" name="imag2"> i <br>
		operaciones <br>
		Operacion: Suma <input type="radio" name="oper" value="Suma"><br>
		Operacion: Resta <input type="radio" name="oper" value="Resta"><br>
		Operacion: Multiplicacion <input type="radio" name="oper" value="Multiplicacion"><br>
		Operacion: Conjugado <input type="radio" name="oper" value="Conjugado"><br>
		<input type="submit" value="Haz operacion">

	</form>
</body>
</html>