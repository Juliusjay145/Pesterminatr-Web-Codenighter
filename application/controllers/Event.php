<?php

class Event extends CI_Controller{

    public function __construct() {
        Parent::__construct();
        $this->load->model('PestControlModel');
        $this->load->model("EventModel");
    }

    public function calendar(){
        $data['title'] = "Create an Event";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $this->load->view("pages/create_event_view", $data);
    }

    public function get_events()
    {
        // Our Start and End Dates
        $start = $this->input->get("start");
        $end = $this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');

        $events = $this->EventModel->get_events($start_format, $end_format);

        $data_events = array();

        foreach($events->result() as $r) {

            $data_events[] = array(
                "id" => $r->ID,
                "title" => $r->title,
                "description" => $r->description,
                "end" => $r->end,
                "start" => $r->start
            );
        }

        echo json_encode(array("events" => $data_events));
        exit();
    }

    public function add_event() {
        /* Our calendar data */
        $name = $this->input->post("name", TRUE);
        $desc = $this->input->post("description", TRUE);
        $start_date = $this->input->post("start_date", TRUE);
        $end_date = $this->input->post("end_date", TRUE);
        $pestcontrol_id = $this->input->post('pestcontrol_id');

        $data = $this->PestControlModel->get_pestcontrol();


        foreach($data as $d):
                    if($d['username'] == $this->session->userdata('username'))
                    {
                        
                            $id = $d['pestcontrol_id'];
                    }
                endforeach;

        // if(!empty($start_date)) {
        //     $sd = DateTime::createFromFormat("Y/m/d H:i:s", $start_date);
        //     $start_date = $sd->format('Y-m-d H:i:s');
        //     $start_date_timestamp = $sd->getTimestamp();
        // } 
        // else {
        //     $start_date = date("Y-m-d H:i:s", time());
        //     $start_date_timestamp = time();
        // }

        // if(!empty($end_date)) {
        //     $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
        //     $end_date = $ed->format('Y-m-d H:i:s');
        //     $end_date_timestamp = $ed->getTimestamp();
        // } 
        // else {
        //     $end_date = date("Y-m-d H:i:s", time());
        //     $end_date_timestamp = time();
        // }

        // $this->EventModel->add_event(array(
        //     "title" => $name,
        //     "description" => $desc,
        //     "start" => $start_date,
        //     "end" => $end_date,
        //     "created_by" => 2
        // )

        
        // );

        $add = array(


            "title" => $name,
            "description" => $desc,
            "start" => $start_date,
            "end" => $end_date,
            "create_by" => $id


            );

        $this->EventModel->insert($add);

        //redirect(site_url("calendar"));

    }

    public function _displayAlert($message,$cont){
         echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }

}


?>





