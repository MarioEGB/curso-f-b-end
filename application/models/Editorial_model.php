<?php 
/**
* 
*/
class Editorial_model extends CI_MODEL
{
	
	function __construct()
	{
		parent:: __construct();
	}

	
	public function getEditorial_id($id){

		$res=$this->db->where('ideditorial',$id);

			return $this->db->get('editorial')->row();
	}

}


 ?>