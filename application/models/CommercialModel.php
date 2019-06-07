<?php


class CommercialModel extends CI_Model
{

	protected $table = "commercial";
	protected $t = "client_commercial";




	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		// $this->db->insert_id();
	}

	public function get_squaremeter()
	{
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_commercial()
	{
		$this->db->where('confirm', 1);
		//$this->db->where('status', 'Pending');
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_commercial4()
	{
		$this->db->where('confirm', 0);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_commercial5()
	{
		$this->db->where('soft_delete', 1);
		$data = $this->db->get($this->table);
		return $data;
	}

	public function get_client_commercial()
	{
		$data = $this->db->get($this->t);
		return $data->result_array();
	}


	public function get_client_commercial2($id)
	{
		$this->db->where("commercial_client_id", $id);
		$data = $this->db->get($this->t);
		return $data->result_array();
	}

	public function total()
	{
		$this->db->select_sum('price');
		$this->db->where('confirm', 0);
		$result = $this->db->get('commercial')->row();
		return $result->price;
	}


	public function get_commercial7($id)
	{
		$this->db->where('client_id', $id);
		$this->db->where('confirm', 1);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}



	public function get_commercial10($id)
	{
		$this->db->where('client_id', $id);
		$this->db->where('confirm', 0);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_commercial2($id)
	{
		$this->db->where("pestcontrol_id",$id);
		$this->db->where('confirm', 1);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function get_commercial3($id)
	{
		$this->db->where("commercial_id",$id);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	public function update_commercial($id, $data){
		$this->db->where('commercial_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function update_confirm($id, $data){
		$this->db->where('commercial_id', $id);
		$this->db->update($this->table, $data);
	}

	public function updatenotif($data){
		return $this->db->update($this->table, $data);
	}

	public function updatecon($data, $id){
		$this->db->where('commercial_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function updatecancel($data, $id){
		$this->db->where('commercial_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function updatedelete($data, $id){
		$this->db->where('commercial_id', $id);
		return $this->db->update($this->table, $data);
	}

	public function update($data){
		$this->db->where('commercial_id', $this->input->post('commercial_id'));
		return $this->db->update($this->table, $data);
	}

	public function get_commercial_id($commercial_id){
		$query = $this->db->get_where('commercial', array('commercial_id' => $commercial_id));
		return $query->result_array();
	}

	public function count_commercial()
	{
		$query = $this->db->query('SELECT COUNT(client_id) as clients_commercial FROM commercial WHERE notification = 1');
		return $query->row()->clients_commercial;
	}

	public function count_status()
	{
		$query = $this->db->query('SELECT COUNT(client_id) as clients_commercial FROM commercial WHERE notification = 1');
		return $query->result_array();
	}
}



?>