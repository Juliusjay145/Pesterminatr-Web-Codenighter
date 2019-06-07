class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('EventModel', 'modeldb');
		$this->load->model('PestControlModel');
		$this->table 		= 'calendar';
		$this->load->helper(array('form', 'url'));

         $this->load->library('form_validation');
		//$this->load->model('Globalmodel', 'modeldb');
	}

	public function calendar()
	{

		$data_calendar = $this->modeldb->get_list($this->table);
		$calendar = array();
		foreach ($data_calendar as $key => $val) 
		{
			$calendar[] = array(
							'id' 	=> intval($val->id), 
							'title' => $val->title, 
							'description' => trim($val->description), 
							'start_date' => date_format( date_create($val->start_date) ,"Y-m-d H:i:s"),
							'end_date' 	=> date_format( date_create($val->end_date) ,"Y-m-d H:i:s"),
							'color' => $val->color
							);
		}

		$data = array();
		$data['get_data']			= json_encode($calendar);

		$data['title'] = "Create a Event";
		$data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
		// $data['update'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
		$this->load->view('pages/create_event_view.php', $data);
	}

	public function save()
	{
		$pestcontrols = $this->PestControlModel->get_pestcontrol();

		foreach ($pestcontrols as $p):
			if($p['username'] == $this->session->userdata('username'))
			{
						
				$id = $p['pestcontrol_id'];
			}
		endforeach;


		$response = array();
		$this->form_validation->set_rules('title', 'Title cant be empty ', 'required');
	    if ($this->form_validation->run() == TRUE)
      	{
			$param = $this->input->post();
			$calendar_id = $param['calendar_id'];
			unset($param['calendar_id']);

			if($calendar_id == 0)
			{
		        $param['create_at']   	= date('Y-m-d H:i:s');
		        $insert = $this->modeldb->insert($this->table, $param);

		        if ($insert > 0) 
		        {
		        	$response['status'] = TRUE;
		    		$response['notif']	= 'Success add calendar';
		    		$response['id']		= $insert;
		        }
		        else
		        {
		        	$response['status'] = FALSE;
		    		$response['notif']	= 'Server wrong, please save again';
		        }
			}
			else
			{	
				$where 		= [ 'id'  => $calendar_id];
	            $param['modified_at']   	= date('Y-m-d H:i:s');
	            $update = $this->modeldb->update($this->table, $param, $where);

	            if ($update > 0) 
	            {
	            	$response['status'] = TRUE;
		    		$response['notif']	= 'Success add calendar';
		    		$response['id']		= $calendar_id;
	            }
	            else
		        {
		        	$response['status'] = FALSE;
		    		$response['notif']	= 'Server wrong, please save again';
		        }

			}
	    }
	    else
	    {
	    	$response['status'] = FALSE;
	    	$response['notif']	= validation_errors();
	    }

		echo json_encode($response);
	}


	

	public function delete()
	{
		$response 		= array();
		$calendar_id 	= $this->input->post('id');
		if(!empty($calendar_id))
		{
			$where = ['id' => $calendar_id];
	        $delete = $this->modeldb->delete($this->table, $where);

	        if ($delete > 0) 
	        {
	        	$response['status'] = TRUE;
	    		$response['notif']	= 'Success delete calendar';
	        }
	        else
	        {
	        	$response['status'] = FALSE;
	    		$response['notif']	= 'Server wrong, please save again';
	        }
		}
		else
		{
			$response['status'] = FALSE;
	    	$response['notif']	= 'Data not found';
		}

		echo json_encode($response);
	}

}







?> -->

