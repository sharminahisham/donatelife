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
		$this->load->model(['Donor_Model']);
	}


	public function labreport()
	{
		$this->load->view('admin/labreport');
	}


	public function make_lab_report()
	{ 

		$result = $this->Lab_Model->view(['id' => $id]);
		if ($result != FALSE) 
		{
			$data['result'] = $result;
			$this->load->view('admin/make_lab_report',$data);

		}
	}


	public function add_report()
	{
		 
		 $this->form_validation->set_rules('verifiedby', 'verifiedby', 'required');
		 $this->form_validation->set_rules('medicalreport', 'medicalreport', 'required');
		
		 if($this->form_validation->run() === FALSE)
		{
		
			$data['result'] = $this->Lab_Model->view();
		    $this->load->view('hospital/make_lab_report',$data);
 	    }
 	    else
 	    {
 	    	    
				$verifiedby = $this->input->post('verifiedby');
	            $medicalreport = $this->input->post('medicalreport');
	            $donor_id=$this->input->post('donor_id');
                $hospital_id=$this->input->post('hospital_id');
	            
				$data = [

					
					'verifiedby' => $verifiedby,
					'medicalreport' =>$medicalreport,
					'donor_id'=>$donor_id,
					'hospital_id'=>$hospital_id,
						
				   
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