<?php


class SquareMeterModel extends CI_Model
{

	protected $table = "squaremeter";




	public function get_squaremeter()
	{
		$data = $this->db->get($this->table);
		return $data;
	}
}



?>