<?php


class EventModel extends CI_Model
{
	
	private $table="event";

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		$this->db->insert_id();
	}
}







?>