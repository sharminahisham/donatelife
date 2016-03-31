<?php 
/**
* 
*/
class Lab_Model extends CI_Model
{
	protected $table = 'report';
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view()
	{
        $query = $this->db->get($this->table);
				if($query)
					{
						if($query->num_rows() >=1)
						{
							return $query->result();
						}
						else
						{
							return FALSE;
						}
					}
	}

	public function insert($data)
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
        if($this->db->insert($this->table,$data))
        {
        	return $this->db->insert_id();
        }
        else
        {
        	return FALSE;
        }
	}

	public function delete($data)
	{
       if($this->db->delete($this->table,$data))
       {
       	   return TRUE;
       } 
       else
       {
          return FALSE; 
       }
	}
}



 ?>