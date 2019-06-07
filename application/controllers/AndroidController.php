<?php

class AndroidController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');
		$this->load->model('PestControlModel');

		$this->load->model('ServiceModel');
		$this->load->model('ResidentialModel');
		$this->load->model('CommercialModel');
		$this->load->model('CommentModel');
	}



	public function fetch_client()
	{
		$this->db->where("status", "Active");
		$data = $this->ClientModel->get_client2();
		echo json_encode(array('client' => $data ));
	}


	public function fetch_client_commercial()
	{
		$data = $this->CommercialModel->get_client_commercial();
		echo json_encode(array('client_commercial' => $data ));
	}

	// public function fetch_service()
	// {
	// 	$id = $this->uri->segment(3);
	// 	$data = $this->ServiceModel->get_services2($id);
	// 	echo json_encode(array('service' => $data ));
	// }

	public function fetch_service()
	{
		$id = $this->uri->segment(3);
		$data = $this->ServiceModel->get_services4($id);
		echo json_encode(array('service' => $data ));
	}

	public function fetch_profile_provider()
	{
		$id = $this->uri->segment(3);
		$data = $this->PestControlModel->get_pestcontrol_profile($id);
		echo json_encode(array('pestcontrol' => $data ));
	}

	public function fetch_residential()
	{
		$id = $this->uri->segment(3);
		$data = $this->ResidentialModel->get_residential2($id);
		echo json_encode(array('residential' => $data ));
	}

	public function fetch_residential_details()
	{
		$id = $this->uri->segment(3);
		$data = $this->ResidentialModel->get_residential7($id);
		echo json_encode(array('residential' => $data ));
	}

	public function fetch_history_details()
	{
		$id = $this->uri->segment(3);
		$data = $this->ResidentialModel->get_residential10($id);
		echo json_encode(array('residential' => $data ));
	}

	public function fetch_history_commercial()
	{
		$id = $this->uri->segment(3);
		$data = $this->CommercialModel->get_commercial10($id);
		echo json_encode(array('commercial' => $data ));
	}

	public function fetch_commercial_details()
	{
		$id = $this->uri->segment(3);
		$data = $this->CommercialModel->get_commercial7($id);
		echo json_encode(array('commercial' => $data ));
	}

	public function fetch_commercial()
	{
		$id = $this->uri->segment(3);
		$data = $this->CommercialModel->get_commercial2($id);
		echo json_encode(array('commercial' => $data ));
	}

	public function fetch_client_deactivated()
	{
		$this->db->where("status", "Deactivate");
		$data = $this->ClientModel->get_client2();
		echo json_encode(array('client' => $data ));
	}

	public function fetch_pestcontrol_deactivated()
	{
		$this->db->where("status", "Deactivate");
		$data = $this->PestControlModel->get_pestcontrol5();
		echo json_encode(array('pestcontrol' => $data ));
	}

	public function fetch_company()
	{
		$this->db->where("status", "Active");
		$company = $this->PestControlModel->get_pestcontrol();
		echo json_encode(array('pestcontrol' => $company ));
	}

	public function fetch_selected_client()
	{
		$id = $this->uri->segment(3);
		$data = $this->ClientModel->get_client3($id);
		echo json_encode(array('client' => $data ));
	}

	public function fetch_selected_client_commercial()
	{
		$id = $this->uri->segment(3);
		$data = $this->CommercialModel->get_client_commercial2($id);
		echo json_encode(array('client_commercial' => $data ));
	}

	public function fetch_selected_pestcontrol()
	{
		$id = $this->uri->segment(3);
		$data = $this->PestControlModel->get_pestcontrol2($id);
		echo json_encode(array('pestcontrol' => $data ));
	}

	public function fetch_selected_commercial()
	{
		$id = $this->uri->segment(3);
		$data = $this->CommercialModel->get_commercial3($id);
		echo json_encode(array('commercial' => $data ));
	}

	public function fetch_selected_residential()
	{
		$id = $this->uri->segment(3);
		$data = $this->ResidentialModel->get_residential5($id);
		echo json_encode(array('residential' => $data ));
	}

	public function fetch_selected_client_details()
	{
		$id = $this->uri->segment(3);
		$data = $this->ResidentialModel->get_residential5($id);
		echo json_encode(array('residential' => $data ));
	}

	public function updateClient()
	{
		$id = $this->uri->segment(3);
		$data = array(

			'client_name' => $this->input->post('client_name'),
			'client_address' => $this->input->post('client_address'),
			'client_contact' => $this->input->post('client_contact')

			);

		$this->ClientModel->update_client($id, $data);
	}

	public function updatePestControl()
	{
		$id = $this->uri->segment(3);
		$data = array(

			'pestcontrol_name' => $this->input->post('pestcontrol_name'),
			'pestcontrol_address' => $this->input->post('pestcontrol_address'),
			'pestcontrol_contact' => $this->input->post('pestcontrol_contact')

			);

		$this->PestControlModel->update_pestcontrol($id, $data);
	}

	public function updateDetails()
	{
		$id = $this->uri->segment(3);
		$data = array(

			'problem' => $this->input->post('problem'),
			'residential_address' => $this->input->post('residential_address'),
			'date' => $this->input->post('date'),
			'time' => $this->input->post('time')

			);

		$this->ResidentialModel->update_details($id, $data);
	}


	public function updateconfirm()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'company_name' => $this->input->post('company_name'),
        	'company_address' => $this->input->post('company_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            //'confirm' => 0,
            'status' => 'Confirm'

            );

        $this->CommercialModel->updatecon($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }

    public function updateresched()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'company_name' => $this->input->post('company_name'),
        	'company_address' => $this->input->post('company_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            //'confirm' => 0,
            'status' => 'Re-Schedule'

            );

        $this->CommercialModel->updatecon($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }

    public function updatecommercialpaid()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'company_name' => $this->input->post('company_name'),
        	'company_address' => $this->input->post('company_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            //'confirm' => 0,
            'status' => 'Paid'

            );

        $this->CommercialModel->updatecon($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }

    public function updatecomplete()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'company_name' => $this->input->post('company_name'),
        	'company_address' => $this->input->post('company_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            'confirm' => 0,
            'status' => 'Completed'

            );

        $this->CommercialModel->updatecon($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }



    public function updateconfirmresidential()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'client_id' => $this->input->post('client_id'),
        	'residential_address' => $this->input->post('residential_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            //'confirm' => 0,
            'status' => 'Confirm'

            );

        $this->ResidentialModel->updateconfirm($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }

    public function updatereschedresidential()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'client_id' => $this->input->post('client_id'),
        	'residential_address' => $this->input->post('residential_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            'status' => 'Re-Schedule'

            );

        $this->ResidentialModel->updateconfirm($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }

    public function updatepaidresidential()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'client_id' => $this->input->post('client_id'),
        	'residential_address' => $this->input->post('residential_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            'status' => 'Paid'

            );

        $this->ResidentialModel->updateconfirm($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }

    public function updatecompleteresidential()
    {
        $id = $this->uri->segment(3);
        $data = array(

        	'client_id' => $this->input->post('client_id'),
        	'residential_address' => $this->input->post('residential_address'),
        	'date' => $this->input->post('date'),
        	'time' => $this->input->post('time'),
        	'price' => $this->input->post('price'),
            'confirm' => 0,
            'status' => 'Completed'

            );

        $this->ResidentialModel->updateconfirm($data, $id);
        //redirect(base_url('pestcontrol/home'));
    }

	public function bookResidential()
	{
		 $price = 0;
		 $total = 0;
		 $meter = $this->input->post('meter');
		 $service = $this->input->post('service_id');

		if($meter == "1-500 Sq.m")
		{
			$price = 100;
		}
		else if($meter == "501-1000 Sq.m")
		{
			$price = 200;
		}
		else if($meter == "1001-1500 Sq.m")
		{
			$price = 300;
		}
		else if($meter == "1501-2000 Sq.m")
		{
			$price = 400;
		}
		else if($meter == "2001-3000 Sq.m")
		{
			$price = 500;
		}
		else if($meter == "3001-4000 Sq.m")
		{
			$price = 600;
		}
		else if($meter == "4001-5000 Sq.m")
		{
			$price = 700;
		}
		else if($meter == "5001-10000 Sq.m")
		{
			$price = 800;
		}
		else if($meter == "100001-20000 Sq.m")
		{
			$price = 900;
		}


		$total = $service + $price;


		$add = array(
				
				'problem' => $this->input->post('problem'),
				'pestcontrol_id' => $this->input->post('pestcontrol_id'),
				'service_id' => $this->input->post('service_id'),
				'meter_id' => $this->input->post('meter'),
				'client_id' => $this->input->post('client_id'),
				'residential_address' => $this->input->post('residential_address'),
				'date' => $this->input->post('date'),
				'time' => $this->input->post('time'),
				'price' => $total

			);

		$this->ResidentialModel->insert($add);
		
	}

	public function bookCommercial()
	{
		 $price = 0;
		 $total = 0;
		 $meter = $this->input->post('meter');
		 $service = $this->input->post('service_id');

		if($meter == "1-500 Sq.m")
		{
			$price = 100;
		}
		else if($meter == "501-1000 Sq.m")
		{
			$price = 200;
		}
		else if($meter == "1001-1500 Sq.m")
		{
			$price = 300;
		}
		else if($meter == "1501-2000 Sq.m")
		{
			$price = 400;
		}
		else if($meter == "2001-3000 Sq.m")
		{
			$price = 500;
		}
		else if($meter == "3001-4000 Sq.m")
		{
			$price = 600;
		}
		else if($meter == "4001-5000 Sq.m")
		{
			$price = 700;
		}
		else if($meter == "5001-10000 Sq.m")
		{
			$price = 800;
		}
		else if($meter == "100001-20000 Sq.m")
		{
			$price = 900;
		}


		$total = $service + $price;


		$add = array(
				
				'problem' => $this->input->post('problem'),
				'company_name' => $this->input->post('company_name'),
				'company_address' => $this->input->post('company_address'),
				'pestcontrol_id' => $this->input->post('pestcontrol_id'),
				'service_id' => $this->input->post('service_id'),
				'meter_id' => $this->input->post('meter'),
				'client_id' => $this->input->post('client_id'),
				'date' => $this->input->post('date'),
				'time' => $this->input->post('time'),
				'price' => $total

			);

		$this->CommercialModel->insert($add);
		
	}

	public function add_feedback()
	{
		$add = array(

			'comment' => $this->input->post('comment'),
			'client_id' => $this->input->post('client_id'),
			'rating' => $this->input->post('rating'),
			'pestcontrol_id' => $this->input->post('pestcontrol_id')

		);
			$this->CommentModel->insert($add);

		
	}

	public function commercial_notification()
	{

		$commercial = $this->CommercialModel->count_status();
		echo json_encode(array('commercial' => $commercial ));
	}




	public function residential_notification()
	{
		$clients = $this->ResidentialModel->count_status();
		echo json_encode(array('residential' => $clients ));
		// $id = $this->uri->segment(3);
		// $data = $this->ResidentialModel->get_residential5($id);
		// echo json_encode(array('residential' => $data ));
	}

	public function update_notification_residential()
	{
		$data = array(

			'notification' => $this->input->post('notification'),
			'notification' => 0

			);

		$this->ResidentialModel->updatenotification($data);
	}




	

















}



?>