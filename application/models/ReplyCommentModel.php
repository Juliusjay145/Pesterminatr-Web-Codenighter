<?php

class ReplyCommentModel extends CI_Model
{


	private $tablename = 'reply_comment';




	public function insert($data)
	{
		$this->db->insert($this->tablename, $data); 
		// $this->db->insert_id();
	}


	public function get_reply_comment()
	{
		$data = $this->db->get($this->tablename);
		return $data;
	}

	public function get_reply_id($reply_id){
		$query = $this->db->get_where('reply_comment', array('reply_id' => $reply_id));
		return $query->result_array();
	}

	public function update($data){
		$this->db->where('reply_id', $this->input->post('reply_id'));
		return $this->db->update($this->tablename, $data);
	}


}










?>