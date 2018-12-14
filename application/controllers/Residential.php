<?php


class Residential extends CI_Controller
{

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('ServiceModel');
		$this->load->model('SquareMeterModel');
		$this->load->model('PestControlModel');
	}

	public function residentialbook($pestcontrol_id)
	{
		$data['title'] = "Residential Book";
		$data['services'] = $this->ServiceModel->get_services();
		$data['squaremeter'] = $this->SquareMeterModel->get_squaremeter();
		$data['providers'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/residential_view');
		$this->load->view('template/footer_view');
	}
}
	
?>