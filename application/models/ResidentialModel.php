<?php


class ResidentialModel extends CI_Model
{

	protected $table = "residential";
	protected $tablename = "squaremeter";


	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		// $this->db->insert_id();
	}

	public function get_squaremeter()
	{
		$data = $this->db->get($this->tablename);
		return $data;
	}

	public function get_residential()
	{
		$this->db->where('confirm', 1);
		//$this->db->where('status', 'Pending','Re-Schedule','Cancel','Paid','Confirm');
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_residential4()
	{
		$this->db->where('confirm', 0);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function total()
	{
		$this->db->select_sum('price');
		$this->db->where('confirm', 0);
		$result = $this->db->get('residential')->row();
		return $result->price;
	}

	public function get_residential8()
	{
		$this->db->where('soft_delete', 1);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_residential3($id)
	{
		$this->db->where('client_id', $id);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_residential7($id)
	{
		$this->db->where('client_id', $id);
		$this->db->where('confirm', 1);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_residential10($id)
	{
		$this->db->where('client_id', $id);
		$this->db->where('confirm', 0);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_residential2($id)
	{
		$this->db->where("pestcontrol_id",$id);
		$this->db->where('confirm', 1);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_residential5($id)
	{
		$this->db->where("residential_id",$id);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}


	public function get_residential_id($residential_id){
		$query = $this->db->get_where('residential', array('residential_id' => $residential_id));
		return $query->result_array();
	}

	// public function count_clients()
	// {
	// 	$query = $this->db->query('SELECT COUNT(client_id) as clients FROM client WHERE notification = 1');
	// 	return $query->row()->clients;
	// }


	public function update_details($id, $data){
		$this->db->where('residential_id', $id);
		$this->db->update($this->table, $data);
	}


	public function updatenotification($data){
		return $this->db->update($this->table, $data);
	}

	public function updateconfirm($data, $id){
		$this->db->where('residential_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function updatecancel($data, $id){
		$this->db->where('residential_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function updatedelete($data, $id){
		$this->db->where('residential_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function update($data){
		$this->db->where('residential_id', $this->input->post('residential_id'));
		return $this->db->update($this->table, $data);
	}

	public function count_residential()
	{
		$query = $this->db->query('SELECT COUNT(client_id) as clients FROM residential WHERE notification = 1');
		return $query->row()->clients;
	}

	public function count_status()
	{
		$query = $this->db->query('SELECT COUNT(client_id) as notification FROM residential WHERE notification = 1');
		return $query->result_array();

		// return $query->row()->clients;
		//$this->db->where("residential_id",$id);
		//$data = $this->db->get($this->table);
	}



	// public function count_residential()
	// {
	// 	$query = $this->db->query('SELECT COUNT(client_id) as clients FROM residential WHERE notification = 1');
	// 	return $query->row()->clients;
	// }

	// public function count_totalresidential($id)
	// {
	// 	$id = $this->session->userdata('username');
	// 	$query = $this->db->query('SELECT COUNT(client_id) as res FROM residential where pestcontrol_id = "$id"');
	// 	return $query->row()->res;
	// }

		public function count_totalresidential($id)
		{
			$this->db->where('pestcontrol_id', $id);
			$query = $this->db->query('SELECT COUNT(client_id) as res FROM residential WHERE pestcontrol_id', $id);
			return $query->row()->res;
		}


	public function count_totalconfirm()
	{
		$query = $this->db->query('SELECT COUNT(client_id) as con FROM residential where confirm = 0');
		return $query->row()->con;
	}
}



?>