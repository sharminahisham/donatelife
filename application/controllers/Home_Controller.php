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
		$this->load->library(['form_validation']);
		$this->load->database();

	}
		

	public function index()
	{
		$this->load->view('home');
	}

	public function registration($page='registration')
	{
		$this->load->view($page);
	}
	public function login($page='login')
	{
		$this->load->view($page);
	}
		public function gallery($page='gallery')
	{
		$this->load->view($page);
	}


	public function add_doner()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('dob', 'dob', 'required');
		 $this->form_validation->set_rules('address', 'address', 'required');
		 $this->form_validation->set_rules('gender', 'gender', 'required');
		 $this->form_validation->set_rules('bloodgroup', 'bloodgroup', 'required');
		 $this->form_validation->set_rules('hospitals', 'hospitals', 'required');
		 $this->form_validation->set_rules('number', 'number','');
		 $this->form_validation->set_rules('mail', 'mail','');
		 $this->form_validation->set_rules('place', 'place','');
	  if($this->form_validation->run() === FALSE)
		{
			$this->load->view('donor');
		}
		else
		{
			$name = $this->input->post('name');
			$dob = $this->input->post('dob');
			$address = $this->input->post('address');
			$gender = $this->input->post('gender');
			$bloodgroup = $this->input->post('bloodgroup');	
			$hospitals = $this->input->post('hospitals');
			$number = $this->input->post('number');
			$mail = $this->input->post('mail');
			$place = $this->input->post('place');
			

			$data = [
				'name' => $name,
				'dob' => $dob,
				'address'=> $address,
				'gender'=> $gender,
				'bloodgroup'=> $bloodgroup,
				'hospitals'=> $hospitals,
				'number'=> $number,
				'mail'=> $mail,
				'place'=> $place,
				
			];
			
			if($this->donor_Model->add($data))
			{
				var_dump(success);
			}
			
			else
			{
				var_dump(fail);
			}
			// if($this->db->insert('donor',$data))
			// {
			// 	$app_id = $this->db->insert_id();
			// 	echo "Data Entry is Success";
			// }
		}
	}
}


 ?>