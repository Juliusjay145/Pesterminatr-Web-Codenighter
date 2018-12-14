<?php

class PestLogsModel extends CI_Model{



	private $table = "pestcontrol_logs";




	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		$this->db->insert_id();
	}

}

?>