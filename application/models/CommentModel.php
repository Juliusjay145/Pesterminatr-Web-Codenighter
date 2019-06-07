<?php

class CommentModel extends CI_Model
{


	private $tablename = 'comment';




	public function insert($data)
	{
		$this->db->insert($this->tablename, $data);
		// $this->db->insert_id();
	}


	public function get_comment()
	{
		$this->db->where('soft_delete', 1);
		$data = $this->db->get($this->tablename);
		return $data;
	}


	public function update_delete($data, $id){
		$this->db->where('comment_id', $id);
		return $this->db->update($this->tablename, $data);
	}

	public function get_comment_id($comment_id){
		$query = $this->db->get_where('comment', array('comment_id' => $comment_id));
		return $query->result_array();
	}

	public function update($data){
		$this->db->where('comment_id', $this->input->post('comment_id'));
		return $this->db->update($this->tablename, $data);
	}


}










?>