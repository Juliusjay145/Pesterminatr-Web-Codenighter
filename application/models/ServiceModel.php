<?php

class ServiceModel extends CI_Model
{
	protected $table = "service";
	
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		$this->db->insert_id();
	}
	public function get_pestcontrol()
	{
		$data = $this->db->get($this->table);
		return $data;
	}
	public function get_services()
	{
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_service_id($service_id){
		$query = $this->db->get_where('service', array('service_id' => $service_id));
		return $query->result_array();
	}

	public function update($data){
		$this->db->where('service_id', $this->input->post('service_id'));
		return $this->db->update($this->table, $data);
	}





}






?>