<?php 
/**
* 
*/
class Admin_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	
		$this->load->helper(['url','form','html']);
		
		$this->load->library(['form_validation', 'table']);
		$this->load->model('Donor_Model');
		$this->load->model('Opinion_Model');

	}


	public function view()
	{
		// $where = ['statuscode' => '0'];
		$data = $this->Donor_Model->view_all();
		if ($data != null) {
			$this->table->set_heading('id', 'name', 'blood group', 'states code');
			foreach ($data as $key => $value) {
				if($value->statuscode == '0')
					$this->table->add_row($value->id, $value->name, $value->bloodgroup, $value->statuscode,'<a href='.base_url('Admin_Controller/view_donor/'.$value->id).'">accept</a>','<a href="'.base_url('Admin_Controller/reject/'.$value->id).'">reject</a>');
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
	
			$data= ['statuscode'=>'False'];


	   				$where = ['id' => $id];
				if($this->Donor_Model->update($where, $data) )	
				{
				$data['message'] = '<script type="text/Javascript">
											alert("Rejected ! Try Again");
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