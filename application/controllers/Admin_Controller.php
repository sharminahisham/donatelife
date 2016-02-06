<?php 
/**
* 
*/
class Admin_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	
		$this->load->helper(['url','form']);
		
		$this->load->library('form_validation');
		$this->load->model('Donor_Model');
		$this->load->model('Opinion_Model');

	}


	public function view()
	{

		$this->db->where(['statuscode' => '0']);
		$result = $this->db->get('donor');
		if($result->num_rows() >= 1)
		{
			$data ['result'] = $result->result();
			$this->load->view('admin/view_registered_users',$data);
		}
	}


	public function view_donor($id)
	{
		$result = $this->Donor_Model->view(['id' => $id]);
		if ($result != FALSE) {
			$data['result'] = $result;
			$this->load->view('admin/view_donor',$data);

		}
	}

	public function accept()
	{
		$this->form_validation->set_rules('opinion', 'opinion', ['required']);
		

		
			
		if ($this->form_validation->run('acceptform') === FALSE) {
			$this->load->view('admin/view_donor');	
			echo "string5";
		}
		else
		{
			echo "string";
			$opinion = $this->input->post('opinion');
			$donor_id = $this->input->post('id');
			var_dump($opinion);
			var_dump($donor_id);

			$data = [
				'type' => 'admin',
				'description' => $opinion,
			];
			$query = $this->Opinion_Model->add($data);
			if ($query != FALSE) {
				$opinion_id = $query;	

				$data = [
					'statuscode' => '1',
					'opinion_id' => $opinion_id
				];

				$where = ['id' => $donor_id];
				if($this->Donor_Model->upadte($where, $data) )	
				{
					var_dump('success');
				}
				else
				{
					var_dump('error');
				}
			}
			else
			{
				$data[$error] = 'Server Down ! Please try again';
				$this->load->view('admin/view_donor', $data);
			}



		}

	}

	public function reject($id)
	{
	    $rjt=['statuscode'=> 'false'];
	    $this->db->where (['id' => $id]);
	    if ($this->db->update('donor',$rjt))
	    {
	    	redirect(base_url('Admin_Controller/view'), 'refresh');
	    }
	    else
	    {
	    	var_dump('fail');
	    }

		}


}

 ?>