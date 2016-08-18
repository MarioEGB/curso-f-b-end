<?php 
/**
* 
*/
class Libro_model extends CI_MODEL
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function getLibros(){

		$res=$this->db->get('libro');

		if ($res->num_rows()>0){
			return $res->result();

		}else{
			return 0;
		}
	}

}


 ?>