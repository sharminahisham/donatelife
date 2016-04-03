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
		$this->load->model('User_Model');
	}


	public function dashboard()
	{
		if ($this->logged['type'] == 'hospital' and $this->logged['logged_in'] == true ) {
			$this->load->view('hospital/hospital_dashboard');
		}
		else
			redirect(base_url('hospital-login'));
	}


	public function users($page='acceptedusers')
	{
		if ($this->logged['type'] == 'hospital' ) {
			$data['result'] = $this->Hospital_Admin_Model->view_all();
			$this->load->view($page,$data);
		}
		else
		{
			redirect(base_url('hospital-login'));
		}
	}

	
	public function login()
	{

		$this->load->view('hospital/hospital_login');
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect(base_url('hospital-login'));
	}

	/*verify login*/

	public function verify()
	{
		$this->form_validation->set_rules('username', 'username','required');
		$this->form_validation->set_rules('password', 'password','required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('hospital/hospital_login');
		}
		else
		{
			$username =  $this->input->post('username');
			$password =  $this->input->post('password');

			$password = md5($password);

			if ($this->User_Model->login($username, $password, 'hospital')) {
				$userdata = [
					'username' => $username,
					'type' => 'hospital',
					'logged_in' => true
				];
				$this->session->set_userdata('logged_in', $userdata);
				redirect(base_url('hospital_dashboard'));
			}
			else
			{
			$data['message'] = 'please try again';
			$this->load->view('hospital/hospital_login',$data);
		    }
		}
	}


	public function index()		
	{ 
		if($this->logged == true){
		$data=$this->Donor_Model->view(['statuscode' => '1']);

		if($data != null)
			{
				$template = [
		                'table_open'            => '<table id="team" class = "table">',
		                'thead_open'            => '<thead class="header">',
		                'thead_close'           => '</thead>',

		                'heading_row_start'     => '<tr>',
		                'heading_row_end'       => '</tr>',
		                'heading_cell_start'    => '<th>',
		                'heading_cell_end'      => '</th>',

		                'tbody_open'            => '<tbody>',
		                'tbody_close'           => '</tbody>',

		                'row_start'             => '<tr>',
		                'row_end'               => '</tr>',
		                'cell_start'            => '<td>',
		                'cell_end'              => '</td>',

		                'row_alt_start'         => '<tr>',
		                'row_alt_end'           => '</tr>',
		                'cell_alt_start'        => '<td>',
		                'cell_alt_end'          => '</td>',

		                'table_close'           => '</table>'
		            ];
		            $this->table->set_template($template);
				$this->table->set_heading('Id','Name','Gender','Date of Birth','Address','Blood Group','status code');
				foreach ($data as $key => $value) 
					{
						$this->table->add_row($value->id, anchor(base_url('Hospital_Admin_Controller/view_donor/'.$value->id),$value->name), $value->gender,$value->dob,$value->address,$value->bloodgroup,$value->statuscode);
					}

				$data['result'] = $this->table->generate();
				$this->load->view('hospital/view_registered_users',$data);
			}
		else
			{
				$data['result'] = "No data found";
				$this->load->view('hospital/view_registered_users',$data);
			}
		}
		else
	    {
			redirect(base_url('Hospitl_Admin_Controller/login'));
			
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
			$this->load->view('hospital/view_accepted_users',$data);

		}
	}
			
		
}






 ?>