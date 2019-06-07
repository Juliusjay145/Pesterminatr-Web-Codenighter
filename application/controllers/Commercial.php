<?php


class Commercial extends CI_Controller
{

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('ServiceModel');
		$this->load->model('SquareMeterModel');
		$this->load->model('PestControlModel');
		$this->load->model('ClientModel');
		$this->load->model('CommercialModel');
	}

	public function commericalbook($pestcontrol_id)
	{
		$data['title'] = "Commercial Book";
		$data['services'] = $this->ServiceModel->get_services();
		$data['squaremeter'] = $this->SquareMeterModel->get_squaremeter();
		$data['providers'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/commerical_view');
		$this->load->view('template/footer_view');
	}

	public function book()
	{
		$companyname = $this->input->post('company_name');
		$problem = $this->input->post('problem');
		$address = $this->input->post('address');
		$date = $this->input->post('date');
		$time = $this->input->post('txttime');
		$services = $this->input->post('services');
		$meters = $this->input->post('meters');
		$pestcontrol_id = $this->input->post('pestcontrol_id');
		$clients = $this->ClientModel->get_client();
		$pestcontrols = $this->PestControlModel->get_pestcontrol();

		foreach ($clients->result() as $c):
			if($c->username == $this->session->userdata('username'))
			{
						
				$idclient = $c->client_name;
			}
		endforeach;

		$res = $services + $meters;

		$add = array(

			'company_name' => $companyname,
			'problem' => $problem,
			'company_address' => $address,
			'pestcontrol_id' => $pestcontrol_id,
			'service_id' => $this->input->post('services'),
			'meter_id' => $this->input->post('meters'),
			'client_id' => $idclient,
			'date' => $date,
			'time' => $time,
			'price' => $res

			);

			$this->CommercialModel->insert($add);

		
	}




	public function cancel()
	{
		$id = $this->uri->segment(3);

		$data = array(

			'status' => 'Cancel'

			);

		$this->CommercialModel->updatecancel($data, $id);
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$data = array(

			'soft_delete' => 0

			);

		$this->CommercialModel->updatedelete($data, $id);
	}
}
	
?>