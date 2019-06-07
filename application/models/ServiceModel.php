<?php

class ServiceModel extends CI_Model
{
	protected $table = "service";
	
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		// $this->db->insert_id();
	}
	public function get_pestcontrol()
	{
		$data = $this->db->get($this->table);
		return $data;
	}
	public function get_services()
	{
		$this->db->where('soft_delete', 1);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_services7()
	{
		$this->db->where('soft_delete', 1);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_services5()
	{
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_services4($id)
	{
		$this->db->where("pestcontrol_id",$id);
		$this->db->where('soft_delete', 1);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_services3()
	{
		$this->db->where('soft_delete', 0);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_services2($id)
	{
		$this->db->where("pestcontrol_id",$id);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_service_id($service_id){
		$query = $this->db->get_where('service', array('service_id' => $service_id));
		return $query->result_array();
	}

	public function updatedelete($data, $id){
		$this->db->where('service_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function update($data){
		$this->db->where('service_id', $this->input->post('service_id'));
		return $this->db->update($this->table, $data);
	}

	public function count_service($id)
	{
		$query = $this->db->query('SELECT COUNT(pestcontrol_id) as ser FROM service WHERE pestcontrol_id', $id);
		return $query->row()->ser;
	}





}






?>