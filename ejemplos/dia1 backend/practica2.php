<?php 
	
class Personas{

	public $nombres =array();
	public $apellidos =array();
	
	public function  guardar($nombre, $apellidos){
		$this->nombres[]=$nombre;
		$this->apellidos[]=$apellidos;
	}

	public function mostrar(){
		for ($i=0; $i < count($this->apellidos); $i++) { 
			echo $this->nombres[$i]." ".$this->apellidos[$i]."<br>";
		}
	}
}

$persona = new Personas();
$persona->guardar("Victor","Ruiz");
$persona->guardar("Omar","Solis");
$persona->guardar("Humberto","Espinoza");
$persona->guardar("Mario","Guizar");

$persona->mostrar();

function suma(float ...$enteros){
	return array_sum($enteros);
}

var_dump(suma(2,'5',4,1.7));

function sumaArray(array ...$array):array{
	return array_map(function(array $array):int{
		return array_sum($array);
	},$array);
}

print_r(array_sum(sumaArray([1,2,3],[4,5,6],[7,8,9])));
?>