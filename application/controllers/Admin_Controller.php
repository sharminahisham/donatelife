<?php 
/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Admin_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
	
		$this->load->helper(['url','form','html']);
		
		$this->load->library(['form_validation', 'table','session']);
		$this->load->model('Donor_Model');
		$this->load->model('User_Model');
		$this->load->model('Opinion_Model');
		$this->load->model('Hospital_Model');

	}

	public function generate()
	{
		var_dump(APPPATH);
		var_dump(md5('admin'));
		var_dump(hash('sha512', 'admin'));
	}

	public function verify()
	{
		$this->form_validation->set_rules('username', 'username','required');
		$this->form_validation->set_rules('password', 'password','required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/login');
		}
		else
		{
			$username =  $this->input->post('username');
			$password =  $this->input->post('password');

			$password = md5($password);

			if ($this->User_Model->login($username, $password, 'admin')) {
				$userdata = [
					'username' => $username,
					'type' => 'admin',
					'logged_in' => true
				];
				$this->session->set_userdata('logged_in', $userdata);
				redirect(base_url('Admin_Controller/view'));
			}
		}
	}

	public function login()
	{
		if($this->logged == true){
			redirect(base_url('dashboard/view'));
		}
		else{
			$this->load->view("admin/login");
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect(base_url('Admin_Controller/login'));
	}

	public function view()
	{
		if($this->logged == true){
			// $where = ['statuscode' => '0'];
			$data = $this->Donor_Model->view_all();
			if ($data != null) {
				$this->table->set_heading('id', 'name', 'blood group', 'states code');
				foreach ($data as $key => $value) {
					if($value->statuscode == '0')
						$this->table->add_row($value->id, $value->name, $value->bloodgroup, $value->statuscode,'<a href='.base_url('Admin_Controller/view_donor/'.$value->id).'>accept</a>','<a href="'.base_url('Admin_Controller/reject/'.$value->id).'">reject</a>');
					else
						$this->table->add_row($value->id, $value->name, $value->bloodgroup, $value->statuscode);

				}
				$data['result'] = $this->table->generate();
				$this->load->view('admin/view_registered_users',$data);

			}
			else
			{
				$data['result'] = 'no data found';
				$this->load->view('admin/view_registered_users',$data);
			}
			
		}
		else
		{
			redirect(base_url('Admin_Controller/login'));
			
		}
	}


	public function view_donor($id)
	{
		if($this->logged == true)
		{
			$result = $this->Donor_Model->view(['id' => $id]);
			if ($result != FALSE) {
				$data['result'] = $result;
				$this->load->view('admin/view_donor',$data);
			}

		}
		else
		{
			redirect(base_url('Admin_Controller/login'));
		}
	}


	public function view_accepeted()
	{
		redirect(base_url('Hospital_Admin_Controller'));
	}



	public function view_hospitals()
	{
		if($this->logged == true)
		{
		$data=$this->Hospital_Model->view_all();
			if($data != null)
				{
					$this->table->set_heading('hospitalname','hospitalcode','address');
					foreach ($data as $key => $value) 
						{
							$this->table->add_row($value->name, $value->code, $value->address);
						}

					$data['result'] = $this->table->generate();
					$this->load->view('admin/view_registered_hospitals',$data);
				}
			else
				{
					$data['result'] = "No data found";
					$this->load->view('admin/view_registered_hospitals',$data);
				}
		}
		else
		{
			redirect(base_url('Admin_Controller/login'));
		}		
	}

	public function accept()
	{
		$this->form_validation->set_rules('opinion', 'opinion', 'xss_clean');
				
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/view_donor');	
	
		}
		else
		{
			$opinion = $this->input->post('opinion');
			$donor_id = $this->input->post('id');
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
				if($this->Donor_Model->update($where, $data) )	
				{
					$data['message'] = '<script type="text/Javascript">
											alert("success");
											window.location = "'.base_url("Admin_Controller/view").'";
										</script>';
					$this->load->view('admin/view_registered_users',$data);
				}	
				else
				{
					$data['message'] = '<scrip type="text/Javascript">
					                         alert("Registration Failed ! Try again later");
                                             window.location ="'.base_url("Admin_Controller/view").'"
					                    </script>';
					$this->load->view('admin/view_registered_users',$data);
				}
			}
			else
			{
				$data[$error] = '<script type="text/javascript" >
                                          alert("Server Down ! Try Again");
                                          window.location="'.base_url("Admin_Controller/view").'"
				                 </script>';
				$this->load->view('admin/view_registered_users', $data);
			}



		}

	}

	public function reject($id)
	{
	
			$data= ['statuscode' => 'FALSE'];


	   				$where = ['id' => $id];
				if($this->Donor_Model->update($where, $data) )	
				{
				$data['message'] = '<script type="text/Javascript">
											alert("Rejected");
											window.location = "'.base_url("Admin_Controller/view").'";
										</script>';
					$this->load->view('admin/view_registered_users',$data);
			}
				else
			    {
				$data[$error] = '<script type="text/javascript" >
                                          alert("Server Down ! Try Again");
                                          window.location="'.base_url("Admin_Controller/view").'"
				                 </script>';
				$this->load->view('admin/view_registered_users', $data);
			    }
	}
		
    

}

?>