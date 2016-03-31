<?php 

/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Hospital_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(['url','form']);
		$this->load->library(['form_validation','table']);
		$this->load->model('Hospital_Model');
		$this->load->model('User_Model');

	}


	public function hospital_registration($page='hospital_registration')
	{
		$this->load->view($page);
	}


	public function view()
		{
			
		}	


	public function add_hospital()
	{ 
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('code','code','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('contact','contact','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');

	    if($this->form_validation->run() === FALSE)
			{
				$this->load->view('hospital_registration');
			}
		else
			{
				$name = $this->input->post('name');
				$code = $this->input->post('code');
				$address = $this->input->post('address');
				$contact = $this->input->post('contact');
				$mail = $this->input->post('email');
	            $username = $this->input->post('username');
	            $password = $this->input->post('password');


				$data = [

					'name' => $name,
					'code' => $code,
					'address' => $address,
					'contact' => $contact,
					'email' => $mail,
					'username' =>$username,	
				    'password' =>$password,
			    ];

			    if($this->Hospital_Model->add($data))

		    	{	
		    	    $data['message'] = '<script type="text/javascript">
		    	                     alert("Registration successfully completed");
		    	                     window.location = "'.base_url('Home_Controller/add_hospital').'";
		    	                     </script>';
		    	    $this->load->view('hospital_registration',$data);

		    	}
				else
				{
                    $data['message'] = '<script type="text/javascript">
                                    alert("Registration failed");
                                    window.location = "'.base_url('Home_Controller/add_hospital').'"
                                   </script>';
                     $this->load->view('hospital_registration',$data);              
				}
            }
	    }

}




 ?>