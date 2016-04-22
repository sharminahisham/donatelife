<?php  

class Hospital_Model extends CI_Model
	{
		protected $table = 'hospital';
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

	    public function add($data)
		    {
		       if($this->db->insert($this->table,$data))
			       {
			       	 return $this->db->insert_id();
			       }
			    else
				    {
				      return FALSE;
				    }
		    }

    public function login($username,$password)
    {
        $this->db->where(['username' => $username, 'password' => $password]);

        $query = $this->db->get($this->table,1);
        if ($query) {
            if ($query->num_rows() >= 1) {
                return $query->result();

            } else {
                return false;
            }
        }
    }


}