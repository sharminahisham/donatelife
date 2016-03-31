<?php 

class Login_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		 $this->load->helper(['url','form']);
		 $this->load->library(['form_validation']);
		 $this->load->model(['User_Model']);
	}

	public function index()
	{
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run() ===FALSE)
        {
        	$this->load->view('');
        }
        else
        {
           $username = $this->input->post('username');
           $password = $this->input->post('password');
            if($this->User_Model->add($username,$password))
            {
            	
            }
            else
            {
            	$this->form_validation->set_message('invalid username/password');
            }
        }

	}
}

 ?>