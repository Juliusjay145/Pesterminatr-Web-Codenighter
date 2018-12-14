<?php

class ClientLogsModel extends CI_Model{



	private $table = "clients_log";




	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		$this->db->insert_id();
	}

	public function get_logs()
	{
		$data = $this->db->get($this->table);
		return $data;
	}

	public function updatelogs($time,$sd){
		$this->db->where('logs_id', $sd);
		$this->db->update($this->table, $time);
	}

}

?>