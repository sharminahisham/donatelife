<?php 

/**
* 
*/
class Tocken_Details_Model extends CI_Model
{   

	protected $table = 'tocken_details';
	protected $fields = [
		'tocken_details.id as tocken_id',
		'tocken_details.verificationcode',
		'tocken_details.donor_id as tocken_donor_id',
		'tocken_details.hospital_id',
		'tocken_details.testdate',
		'tocken_details.testtime',
		'tocken_details.tockenno',
		'donor.id as donor_id',
		'donor.name',
		'donor.gender',
		'donor.bloodgroup',
		'donor.dob',
		'donor.report',
	];

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view_all($where)
	{
		$this->db->select($this->fields);
        $this->db->where($where);
		$this->db->from($this->table);
		$this->db->join('donor','donor.id = tocken_details.donor_id');
		//$this->db->join('donor','donor.tockenno = tocken_details.tockenno');
        $query = $this->db->get();
        //var_dump($query);
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

	public function add($data)
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
        if($this->db->insert($this->table, $data))
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


	public function view_join($where)
	{
		$this->db->select($this->fields);
		$this->db->where($where);
		$this->db->from($this->table);
		$this->db->join('donor','donor.id = tocken_details.donor_id');
		$query = $this->db->get();
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

   
}



?>