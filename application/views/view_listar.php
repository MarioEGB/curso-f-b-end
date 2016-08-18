<!-- <?php echo $mensaje ?> -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Libros</title>
</head>
<body>
	<div>
		<ul>
			<li>
				<a href="<?php echo base_url()?>index.php/libro/anadirlibro">Añadir</a>
				<a href="<?php echo base_url()?>index.php/libro/editarlibro">editar</a>
				<a href="<?php echo base_url()?>index.php">listar</a>
				<a href="<?php echo base_url()?>index.php/libro/eliminarlibro">eliminar</a>
			</li>
		</ul>
	</div>
	<h1 align="center">Tabla Libros</h1>
	<div>
		<table border="5px" align="center" bgcolor="lightblue">
			<tr>
				<td>Clave</td>
				<td>Titulo</td>
				<td>ISBN</td>
				<td>Precio</td>
				<td>Editorial</td>
				<td>Autor</td>
			</tr>
			<?php  
			if(count($libros)){
					foreach ($libros as $libro) {
						echo "<tr>";
						echo "<td>".$libro->idlibro."</td>";	
						echo "<td>".$libro->titulo."</td>";	
						echo "<td>".$libro->isbn."</td>";	
						echo "<td>".$libro->precio."</td>";	
						echo "<td>".$libro->ideditorial."</td>";	
						echo "<td>".$libro->idautor."</td>";	
						echo "</tr>";
					}
			}else{
				echo "<h2>No hay ningun registro en la base de datos<h2>";
			}	

			?>
		</table>

	</div>
</body>
</html>



