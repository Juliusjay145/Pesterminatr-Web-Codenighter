<?php

class Schedule extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');
		$this->load->model('PestControlModel');

		$this->load->model('ServiceModel');
		$this->load->model('ResidentialModel');
		$this->load->model('CommercialModel');
		$this->load->model('ScheduleModel');

		
	}

	public function add_schedule()
	{
			$date = $this->input->post('txtdate');
			$time = $this->input->post('txttime');
			$data = $this->PestControlModel->get_pestcontrol();
			foreach($data as $d):
					if($d['username'] == $this->session->userdata('username'))
					{
						
							$id = $d['pestcontrol_id'];
					}
			endforeach;		
			$add = array(

				'date' => $date,
				'time' => $time,
				'pestcontrol_id' => $id

				);

			$this->ScheduleModel->insert($add);
	}





}



?>