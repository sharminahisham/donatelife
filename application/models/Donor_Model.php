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

	public function view_all()
	{
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

	public function update( $where, $data)
	{
		$this->db->where(['id'=>$where]);
		$update = $this->db->update('donor', $data);
		/*$this->db->set($data);
		var_dump($this->db->get_compiled_update('donor'));*/
		return $update;

	}

	public function updation( $where, $data)
	{
		$this->db->where($where);
		$update = $this->db->update('donor', $data);
		$this->db->set($data);
		//var_dump($this->db->get_compiled_update('donor'));
		return $update;

	}

    public function add($data)
    {
    	if($this->db->insert($this->table, $data))
		{
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
	}
    

}

 ?>