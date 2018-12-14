<?php

class Service extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ServiceModel');
		$this->load->model('PestControlModel');


	}
	
	public function addService()
	{
		$txtservice =  $this->input->post('txtservice');
		$txtdetails =  $this->input->post('txtdetails');
		$servicetype =  $this->input->post('servicetype');
		$txtprice = $this->input->post('txtprice');

		$data = $this->PestControlModel->get_pestcontrol();
		$services = $this->ServiceModel->get_services();
			

				foreach($data as $d):
					if($d['username'] == $this->session->userdata('username'))
					{
						
							$id = $d['pestcontrol_id'];
					}
				endforeach;
		foreach ($services->result() as $service):
			foreach($data as $d):
				if($service->pestcontrol_id == $d['pestcontrol_id']):
					$service->service_name;
		endif;		
		endforeach;			
		endforeach;			
						
			if($txtservice != $service->service_name){

					$add = array(

				'service_name' => $txtservice,
				'service_detail' => $txtdetails,
				'service_type' => $servicetype,
				'service_price' => $txtprice,
				'pestcontrol_id' => $id

				);

				  	$this->ServiceModel->insert($add);
	                $this->_displayAlert('Service Added Sucessfully','PestControl/home', $data);

			}					
	             else{


					foreach($data as $d):
						foreach ($services->result() as $s):
							if($s->pestcontrol_id == $d['pestcontrol_id']){
		      							if($txtservice == $s->service_name){
		      								$this->_displayAlert('Service Already Exist','PestControl/home');
		      							}
		      				}			
						endforeach;
					endforeach;

	            }




				
	}

	public function update($service_id)
	{
		$data['title'] = "Update Services";
		$data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
		$data['updateService'] = $this->ServiceModel->get_service_id($service_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/updateServices_view', $data);
		$this->load->view('template/footer_view');
	}

	public function editService()
	{
		$txtservice =  $this->input->post('txtservice');
		$txtdetails =  $this->input->post('txtdetails');
		$servicetype =  $this->input->post('servicetype');
		$txtprice = $this->input->post('txtprice');

		$data = $this->PestControlModel->get_pestcontrol();

		foreach ($data as $d):
			if($d['username'] == $this->session->userdata('username'))
			{
				$id = $d['pestcontrol_id'];
			}	
			
		endforeach;

		$update = array(

			'service_name' => $txtservice,
			'service_detail' => $txtdetails,
			'service_type' => $servicetype,
			'service_price' => $txtprice,
			'pestcontrol_id' => $id

			);

		$this->ServiceModel->update($update);
		$this->_displayAlert('Successfully changed','pestcontrol/home');

	}


	public function _displayAlert($message,$cont){
       	 echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }












}


?>