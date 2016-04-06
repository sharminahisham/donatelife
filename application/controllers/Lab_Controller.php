<?php 

/**
* 
*/
class Lab_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(['url','form',]);
		$this->load->library(['form_validation','table']);
		$this->load->model(['Lab_Model']);
	}


	public function labreport()
	{
		$this->load->view('admin/labreport');
	}


	public function view()
	{
		
	}
	public function add_report()
	{
		 $this->form_validation->set_rules('testdate', 'testdate', 'required');
		 $this->form_validation->set_rules('testtime', 'testtime', 'required');
		 $this->form_validation->set_rules('tokenno', 'tokenno', 'required');
		 $this->form_validation->set_rules('forwadedby', 'forwadedby', 'required');
		 $this->form_validation->set_rules('forwadedto', 'forwadedto', 'required');
		 $this->form_validation->set_rules('medicalreport', 'medicalreport', 'required');
		
		 if($this->form_validation->run() === FALSE)
		{
		
			$this->load->view('admin/labreport');
		 
 	    }
 	    else
 	    {
 	    	$testdate = $this->input->post('testdate');
				$testtime = $this->input->post('testtime');
				$tokenno= $this->input->post('tokenno');
				$forwadedby = $this->input->post('forwadedby');
				$forwadedto= $this->input->post('forwadedto');
	            $medicalreport = $this->input->post('medicalreport');
	            
				$data = [

					'testdate' => $testdate,
					'testtime' => $testtime,
					'tokenno' => $tokenno,
					'forwadedby' => $forwadedby,
					'forwadedto' => $forwadedto,
					'medicalreport' =>$medicalreport,
						
				   
			    ];

			    if($this->Lab_Model->insert($data))

		    	{	
		    	    $data['message'] = '<script type="text/javascript">
		    	                     alert(" Successfully Forwaded");
		    	                     window.location = "'.base_url('Lab_Controller/view').'";
		    	                     </script>';
		    	    $this->load->view('admin/labreport',$data);

		    	}
				else
				{
                    $data['message'] = '<script type="text/javascript">
                                    alert("Forwading failed");
                                    window.location = "'.base_url('Lab_Controller/add_report').'"
                                   </script>';
                     $this->load->view('admin/labreport',$data);              
				}
            }
	    }
 	    
   

}   
?>