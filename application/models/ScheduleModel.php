<?php

class ScheduleModel extends CI_Model{



	private $table = "schedule";




	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		// $this->db->insert_id();
	}


	public function get_schedule()
	{
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function updateconfirm($data, $id){
		$this->db->where('schedule_id', $id);
		return $this->db->update($this->table, $data);
	}

	


}

?>