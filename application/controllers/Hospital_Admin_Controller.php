<?php 
/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Hospital_Admin_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form','html']);
		$this->load->library(['form_validation','table']);
		$this->load->model('Donor_Model');
	}

	public function users($page='acceptedusers')
	{
		$data['result'] = $this->Hospital_Admin_Model->view_all();
		$this->load->view($page,$data);
	}

	
	public function index()		
	{ 
		
		$data=$this->Donor_Model->view(['statuscode' => '1']);

		if($data != null)
			{
				$this->table->set_heading('Id','Name','Gender','Date of Birth','Address','Blood Group','status code');
				foreach ($data as $key => $value) 
					{
						$this->table->add_row($value->id, anchor(base_url('Hospital_Admin_Controller/view_donor/'.$value->id),$value->name), $value->gender,$value->dob,$value->address,$value->bloodgroup,$value->statuscode);
					}

				$data['result'] = $this->table->generate();
				$this->load->view('admin/view_registered_users',$data);
			}
		else
			{
				$data['result'] = "No data found";
				$this->load->view('admin/view_registered_users',$data);
			}
		}



		public function view_accepted_donor($id)
    {
		$result = $this->Donor_Model->view(['id' => $id]);
		if ($result != FALSE) {
			$data['result'] = $result;
			$this->load->view('admin/view_hospital_admin',$data);

		}
	}



	public function view_donor($id)
	{
		$result = $this->Donor_Model->view(['id' => $id]);
		if ($result != FALSE) {
			$data['result'] = $result;
			$this->load->view('admin/view_acceptedusers',$data);

		}
	}
			
		
}






 ?>