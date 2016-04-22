<?php 
/**
* 
*/
class Lab_Model extends CI_Model
{
	protected $table = 'report';

    protected $fields = [
        'donor.name',
        'donor.gender',
        'donor.mobile',
        'donor.email',
        'donor.report',
        'report.forwadedby',
        'report.forwadedto',
        'report.medicalreport',
        'report.verifiedby',
    ];

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

	public function view_where($where)
	{
		$this->db->where($where);
		$query = $this->db->get($this->table);
		if($query)
		{
			if($query->num_rows() >= 1)
			{
				return $query->result();
			}
			else
			{
				return FALSE;
			}
		}
	}


    public function view_join($where)
    {
        $this->db->select($this->fields);
        $this->db->where($where);
        $this->db->join('donor', 'donor.id = report.donor_id');
        $query  =$this->db->get($this->table);
        if ($query != false) {
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}



 ?>