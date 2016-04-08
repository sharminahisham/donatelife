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
		$this->load->model('Tocken_Details_Model');
	}


	public function dashboard()
	{
		if ($_SESSION['type'] == 'hospital' and $this->logged == true ) {
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
				$this->session->set_userdata($userdata);
				redirect(base_url('hospital_dashboard'));
			}
			else
			{
			$data['message'] = 'please try again';
			$this->load->view('hospital/hospital_login',$data);
		    }
		}
	}

    /* accepted users*/
	public function index()		
	{ 
		if($this->logged == true and $_SESSION['type'] == 'hospital'){
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
			redirect(base_url('login'));
			
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

	/* tocken details*/
		
	public function view_lab_request()
	{
		if($this->logged == true){
		$data=$this->Tocken_Details_Model->view_all();
			
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
	  //       $where = ['report' => 'generated'];
			// $data = $this->Tocken_Details_Model->view_join($where);
			// if ($data != false) 
			// 	{
	                 //var_dump($data);
					$this->table->set_heading('Id' , 'Name' , 'Hospital_id' , 'Testdate' , 'Testtime' , 'Tokenno' , 'Verificationcode');
					foreach ($data as $key => $value)

					{
						$this->table->add_row($value->donor_id, anchor(base_url('Lab_Controller/make_lab_report/'.$value->donor_id),$value->name), $value->hospital_id, $value->testdate, $value->testtime,$value->tockenno ,$value->verificationcode);
					}

					$data['result'] = $this->table->generate();
					$this->load->view('hospital/view_tocken',$data);

				// }
			}
					else
					{
						$data['result'] = 'No data found';
						$this->load->view('hospital/view_tocken',$data);
					}
		}
		else
	    {
			redirect(base_url('Hospitl_Admin_Controller/login'));
			//var_dump("error in tockenno");
		}
	}

	public function view_accepted_users($id)
	{ 

		$result = $this->Tocken_Details_Model->view(['id' => $id]);
		if ($result != FALSE) 
		{
			$data['result'] = $result;
			$this->load->view('hospital/view_lab_request',$data);

		}
	}



	   
		public function add_report()
		{
			$this->load->view('hospital/make_lab_report');
		}	


		public function add_tocken()
		{
			//validation
                  
	     $this->form_validation->set_rules('testdate', 'testdate', 'required');
		 $this->form_validation->set_rules('testtime', 'testtime', 'required');
		 $this->form_validation->set_rules('tockenno', 'tockenno', 'required');
		 $this->form_validation->set_rules('verificationcode', 'verificationcode', 'required');
         
        if($this->form_validation->run() === FALSE)
			{
				$data['result'] = $this->Tocken_Details_Model->view_all();
				$this->load->view('hospital/view_accepted_users',$data);
			}
		else
		{
			$testdate = $this->input->post('testdate');
			$testtime = $this->input->post('testtime');
			$tockenno= $this->input->post('tockenno');
			$verificationcode = $this->input->post('verificationcode');	
            $donor_id=$this->input->post('donor_id');
            $hospital_id=$this->input->post('hospital_id');

			$data = [
						'testdate' => $testdate,
						'testtime' => $testtime,
						'tockenno'=> $tockenno,
						'verificationcode'=> $verificationcode,
						'donor_id'=>$donor_id,
						'hospital_id'=>$hospital_id,
						'report' => 'false'
			        ];
			$datas = [ 
			        	'tockenno'=> $tockenno,
			        		
			         ];
			    $this->Donor_Model->update($donor_id,$datas);

			   if($this->Tocken_Details_Model->add($data))
			{
				$data['message'] = '<script type = "text/javaScript">
										alert("success!");
										window.location = "'.base_url('hospital_dashboard/donors').'";
									</script>';
				$this->load->view('admin/view_tocken',$data);
			}
			
			else
			{
				$data['error'] = '<script type = "text/javaScript">
										alert("Failed!");
										window.location = "'.base_url('hospital_dashboard/donors').'";
									</script>';
				$this->load->view('admin/view_tocken',$data);
			}
	    }
			//add details to tocken_details table

			// update donor table set tocken = true
	              //$data= ['tockenno' => 'TRUE'];


	   		      //$where = ['id' => $id];
				//if($this->Tocken_Details_Model->update($where , $data) )	
				//{
                     //echo ('$result[0]');
				//}
				


		}
	
		
}
?>