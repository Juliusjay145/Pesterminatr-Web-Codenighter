<?php


class Residential extends CI_Controller
{

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('ServiceModel');
		$this->load->model('SquareMeterModel');
		$this->load->model('PestControlModel');
		$this->load->model('ClientModel');
		$this->load->model('ResidentialModel');
		$this->load->model('ScheduleModel');
	}

	public function residentialbook($pestcontrol_id)
	{
		$data['title'] = "Residential Book";
		$data['services'] = $this->ServiceModel->get_services();
		$data['schedules'] = $this->ScheduleModel->get_schedule();
		$data['squaremeter'] = $this->SquareMeterModel->get_squaremeter();
		$data['providers'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/residential_view');
		$this->load->view('template/footer_view');
	}

	public function bookResidential()
	{


		$id = $this->uri->segment(3);
		
		$add = array(

			'selected' => 0

			);

			$this->ScheduleModel->updateconfirm($add, $id);
		
		// $txtname = $this->input->post('fname');
		// $txtlname = $this->input->post('lname');
		$problem = $this->input->post('problem');
		$address = $this->input->post('txtaddress');
		$date = $this->input->post('txtdate');
		$time = $this->input->post('txttime');
		$txtservices = $this->input->post('services');
		$txtmeters = $this->input->post('meters');
		$pestcontrol_id = $this->input->post('pestcontrol_id');
		$price = $this->input->post('price');

		$meters = $this->SquareMeterModel->get_squaremeter();
		$services = $this->ServiceModel->get_services();
		$clients = $this->ClientModel->get_client();
		$pestcontrols = $this->PestControlModel->get_pestcontrol();
		$residential = $this->ResidentialModel->get_residential();



		foreach ($clients->result() as $c):
			if($c->username == $this->session->userdata('username'))
			{
						
				$idclient = $c->client_name;
			}
		endforeach;
		
		$res= $txtmeters + $txtservices;


		$add = array(

			'problem' => $problem,
			'pestcontrol_id' => $pestcontrol_id,
			'service_id' => $this->input->post('services'),
			'meter_id' => $this->input->post('meters'),
			'client_id' => $idclient,
			'residential_address' => $address,
			'date' => $date,
			'time' => $time,
			'price' => $res

			);

			$this->ResidentialModel->insert($add);




			//$this->_displayAlert('Transaction request successfully','Residential/residentialbook');

	}

	public function cancel()
	{
		$id = $this->uri->segment(3);

		$data = array(

			
			'status' => "Cancel"

			);

		$this->ResidentialModel->updatecancel($data, $id);
	}


	public function delete()
	{
		$id = $this->uri->segment(3);

		$data = array(

			
			'soft_delete' => 0

			);

		$this->ResidentialModel->updatedelete($data, $id);
	}

	public function _displayAlert($message,$cont){
       	 echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }
}
	
?>