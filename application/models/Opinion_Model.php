<?php 


/**
* 
*/
class Opinion_Model extends CI_Model
{
	
	protected $table = 'opinion';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add(array $data)
	{
		if($this->db->insert($this->table, $data))
		{
			return $this->db->insert_id();
		}else
		{
			return FALSE;
		}
	}

}