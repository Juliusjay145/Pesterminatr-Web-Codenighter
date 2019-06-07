<?php


class EventModel extends CI_Model
{
	
	// public function __construct() {
 //        $this->load->database();
 //    }


    private $table = 'calendar';
    
    public function get_events($start, $end){
        return $this->db->where("start >=", $start)->where("end <=", $end)->get("calendar");
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }
    
    public function get_event($id){
        return $this->db->where("ID", $id)->get("calendar");
    }

    public function update_event($id, $data){
        $this->db->where("ID", $id)->update("calendar", $data);
    }

    public function delete_event($id){
        $this->db->where("ID", $id)->delete("calendar");
    }
}







?>