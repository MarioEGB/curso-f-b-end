<?php 
/**
* 
*/
class Autor_model extends CI_MODEL
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function getAutor_id($id){

		$res=$this->db->where('idautor',$id);

		
			return $this->db->get('autor')->row();

		
	}

}


 ?>