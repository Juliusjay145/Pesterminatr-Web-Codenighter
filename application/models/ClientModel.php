<?php

class ClientModel extends CI_Model{



	private $table = "client";




	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		$this->db->insert_id();
	}

	public function auth($txtusername, $txtpassword)
	{
		$this->db->where('username', $txtusername);
		$this->db->where('password', $txtpassword);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get_client()
	{
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_client_id($client_id){
		$query = $this->db->get_where('client', array('client_id' => $client_id));
		return $query->result_array();
	}

	public function update($data){
		$this->db->where('client_id', $this->input->post('client_id'));
		return $this->db->update($this->table, $data);
	}

	public function count_clients()
	{
		$query = $this->db->query('SELECT COUNT(client_id) as clients FROM client WHERE notification = 1');
		return $query->row()->clients;
	}


}

?>