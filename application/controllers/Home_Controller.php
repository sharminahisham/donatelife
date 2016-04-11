<?php 
// defined('BASEPATH') OR exit('No direct script acces alloewed');


/**
* Home controller
*/
class Home_Controller extends CI_Controller
{
	
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->library(['form_validation','table','session']);
		$this->load->model('Donor_Model');
		$this->load->model('Hospital_Model');
	}
		

	public function sessionch()
	{
		var_dump($_SESSION);
	}
	public function index()
	{
		$this->load->view('index');

	}

	public function registration($page='registration')
	{
		$data['result'] = $this->Hospital_Model->view_all();
		$this->load->view($page,$data);
	}
	
	public function login($page='login')
	{
		$this->load->view($page);
	}
		public function gallery($page='gallery')
	{
		$this->load->view($page);
	}


	public function add_donor()
	{
		 $this->form_validation->set_rules('name', 'name', '');
		 $this->form_validation->set_rules('date', 'date', 'required');
		 $this->form_validation->set_rules('month', 'month', 'required');
		 $this->form_validation->set_rules('year', 'year', 'required');
		 $this->form_validation->set_rules('address', 'address', 'required');
		 $this->form_validation->set_rules('gender', 'gender', 'required');
		 $this->form_validation->set_rules('bloodgroup', 'bloodgroup', 'required');
		 $this->form_validation->set_rules('hospital', 'hospitalname', 'required');
		 $this->form_validation->set_rules('mobile', 'mobile','required|max_length[15]');
		 $this->form_validation->set_rules('email', 'email');

	  if($this->form_validation->run() === FALSE)
		{
			$data['result'] = $this->Hospital_Model->view_all();
			$this->load->view('registration',$data);
		}
		else
		{
			$name = $this->input->post('name');
			$address = $this->input->post('address');
			$gender = $this->input->post('gender');
			$bloodgroup = $this->input->post('bloodgroup');	
			$hospital = $this->input->post('hospital');
			$number = $this->input->post('mobile');
			$mail = $this->input->post('email');
			$date = $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('date');

			$data = [
				'name' => $name,
				'dob' => $date,
				'address'=> $address,
				'gender'=> $gender,
				'bloodgroup'=> $bloodgroup,
				'mobile'=> $number,
				'email'=> $mail,
				'statuscode' => '0',
				'hospital_id' => $hospital

			];
			   if($this->Donor_Model->add($data))
			{
				$data['message'] = '<script type = "text/javaScript">
										alert("success!");
										window.location = "'.($_SERVER['HTTP_REFERER']).'";
									</script>';
				$this->load->view('registration',$data);
			}
			
			else
			{
				$data['error'] = '<script type = "text/javaScript">
										alert("Failed!");
										window.location = "'.base_url('Home_Controller/add_donor').'";
									</script>';
				$this->load->view('registration',$data);
			}
				
			// if($this->db->insert('donor',$data))
			// {
			// 	$app_id = $this->db->insert_id();
			// 	echo "Data Entry is Success";
			// }
		}
	}


	public function add_hospital()
	{
		$this->load->view('hospital_registration');
	}


	public function contact()
	{
		$this->load->view('index');
	}

	
	
}

 ?>