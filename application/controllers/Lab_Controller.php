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
		$this->load->model(['Tocken_Details_Model']);
	}


	public function labreport()
	{
		$this->load->view('admin/labreport');
	}


	public function make_lab_report($id)
	{ 
		$result = $this->Tocken_Details_Model->view_join(['donor.id' => $id]);
		if ($result != FALSE) 
		{
			$data['result'] = $result;
			$this->load->view('hospital/make_lab_report',$data);

		}
	}


	public function add_report_submit()
	{
		 
		 $this->form_validation->set_rules('verifiedby', 'verifiedby', 'required');
		 $this->form_validation->set_rules('medicalreport', 'medicalreport', 'required');
		/* $this->db->select('name,dob,gender,bloodgroup');
         $this->db->from('donor');*/
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
                    $data = [
                        'report' => 'true'
                    ];
                    if ($this->Donor_Model->update(['id' => $donor_id], $data)) {
                        $data['message'] = '<script type="text/javascript">
		    	                     alert(" Successfully Forwaded");
		    	                     window.location = "'.base_url('hospital_dashboard/lab').'";
		    	                     </script>';
                        $this->load->view('hospital/make_lab_report',$data);
                    }

		    	}
				else
				{
                    $data['message'] = '<script type="text/javascript">
                                    alert("Forwading failed");
                                    window.location = "'.base_url('/hospital_dashboard/lab').'"
                                   </script>';
                     $this->load->view('hospital/make_lab_report',$data);
				}
            }
	    }
 	    
   

}   
?>