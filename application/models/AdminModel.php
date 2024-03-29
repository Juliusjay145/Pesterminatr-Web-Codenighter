<?php

class AdminModel extends CI_Model
{
	private $table = "admin";
	private $tablename = "pestcontrol";
	private $t = "client";

	public function auth($txtusername, $txtpassword)
	{
		$this->db->where('username', $txtusername);
		$this->db->where('password', $txtpassword);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get_admin()
	{
		$data = $this->db->get($this->table);
		return $data;
	}


	public function update2($data){
		return $this->db->update($this->table, $data);
	}

	public function update($data){
		return $this->db->update($this->tablename, $data);
	}

	public function updatenotification($data){
		return $this->db->update($this->t, $data);
	}

	public function get_admin_id($admin_id){
		$query = $this->db->get_where('admin', array('admin_id' => $admin_id));
		return $query->result_array();
	}





}














?>