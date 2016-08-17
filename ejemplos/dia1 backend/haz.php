<?php 

class Imaginario{

	 var $real, $imag;
	
	function __construct($r,$i){
		$this->real=$r;
		$this->imag=$i;
	}

	function __toString(){
		return $this->real." + ".$this->imag." i";
	}

	static function Suma(Imaginario $a, Imaginario $b){
		$resultado = new Imaginario($a->real+$b->real,$a->imag+$b->imag);
		return $resultado;
	}


	static function Restar(Imaginario $a, Imaginario $b){
		$resultado = new Imaginario($a->real-$b->real,$a->imag-$b->imag);
		return $resultado;
	}

	static function Multiplicar(Imaginario $a, Imaginario $b){
		$aux1=$a->real*$b->real;
		$aux2=$a->imag*$b->imag;
		$aux3=$a->real*$b->imag;
		$aux4=$a->imag*$b->real;
		$resultado = new Imaginario($aux1-$aux2,$aux3+$aux4);
		return $resultado;
	}

	static function Conjugar(Imaginario $a, Imaginario $b){
		$resultado = new Imaginario($a->real,($a->imag)*-1);
		return $resultado;
	}
}

$imaginario1 = new Imaginario($_POST['real1'],$_POST['imag1']);
$imaginario2 = new Imaginario($_POST['real2'],$_POST['imag2']);

switch ($_POST['oper']) {
	case 'Suma':
		$res= Imaginario::Suma($imaginario1,$imaginario2);
		break;
	case 'Resta':
		$res= Imaginario::Restar($imaginario1,$imaginario2);
		break;
	case 'Multiplicacion':
		$res= Imaginario::Multiplicar($imaginario1,$imaginario2);
		break;
	case 'Conjugado':
		$res= Imaginario::Conjugar($imaginario1,$imaginario2);
		break;
	default:
		echo "ERROR<br>";
		break;
}

echo "El resultado de la operacion es: ".$res;

?>