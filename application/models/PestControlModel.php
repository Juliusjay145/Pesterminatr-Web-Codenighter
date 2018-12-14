<?php

class PestControlModel extends CI_Model{



	private $table = "pestcontrol";




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

	public function get_pestcontrol()
	{
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_pestcontrol_id($pestcontrol_id){
		$query = $this->db->get_where('pestcontrol', array('pestcontrol_id' => $pestcontrol_id));
		return $query->result_array();
	}

	public function update($data){
		$this->db->where('pestcontrol_id', $this->input->post('pestcontrol_id'));
		return $this->db->update($this->table, $data);
	}

	public function count_providers()
	{
		$query = $this->db->query('SELECT COUNT(pestcontrol_id) as providers FROM pestcontrol WHERE notification=1');
		return $query->row()->providers;
	}	

}

?>