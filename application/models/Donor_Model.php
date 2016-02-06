<?php 


/**
* 
*/
class Donor_Model extends CI_Model
{
	
	protected $table = 'donor';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view(array $where)
	{
		$this->db->where($where);
		$query = $this->db->get($this->table); 
		if($query)
		{
			if($query->num_rows() >=1 )
			{
				return $query->result();
			}
			else
			{
				return FALSE;
			}
		}
	}

	public function upadte( $where, $data)
	{
		$this->db->where($where);
		$update = $this->db->update('donor', $data);
		return $update;

	}


}

 ?>