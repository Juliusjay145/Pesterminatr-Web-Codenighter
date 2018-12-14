<?php


class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('EventModel');
		$this->load->database();
	}

	public function calendar()
	{
		$data['result'] = $this->db->get("event")->result();
		$data['title'] = "Create an Event";
   
        foreach ($data['result'] as $key => $value) {
            $data['data'][$key]['title'] = $value->title;
            $data['data'][$key]['start'] = $value->start_date;
            $data['data'][$key]['end'] = $value->end_date;
            $data['data'][$key]['backgroundColor'] = "#00a65a";
        }
         
        $this->load->view('pages/event_view', $data);
        
	}
}







?>