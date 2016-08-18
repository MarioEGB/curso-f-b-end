<?php 

class Libro extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Libro_model');
		$this->load->model('Autor_model');
		$this->load->model('Editorial_model');


	}

	public function index(){
		$libros = $this->Libro_model->getLibros();
		for ($i=0; $i <count($libros) ; $i++) { 
			$editorial= $this->Editorial_model->getEditorial_id($libros[$i]->ideditorial);
			$autor= $this->Autor_model->getAutor_id($libros[$i]->idautor);
			$libros[$i]->ideditorial=$editorial->nombre;
			$libros[$i]->idautor=$autor->nombre." ".$autor->apellidopaterno;
		}
		$data['mensaje']="Bienvenidos";
		$data['libros']= $libros;
		$this->load->view('view_listar',$data);	
	}

	public function anadirlibro(){
		$this->load->view('view_anadir');
	}
}


?>