<?php


class LandingPage extends CI_Controller
{
	
	public function index()
	{
		$data['title'] = "Pesterminatr";
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/welcome_view');
		$this->load->view('template/footer_view');
	}
}

?>