<?php

class Comment extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');

		$this->load->model('CommentModel');
		$this->load->helper('url');
		$this->load->model('ReplyCommentModel');


	}

	public function edit($comment_id)
	{
		$data['title'] = "Update Comment";
		$data['update'] = $this->CommentModel->get_comment_id($comment_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/updateComment_view', $data);
		$this->load->view('template/footer_view');
	}

	public function add_comment()
	{
		$txtcomment = $this->input->post('txtcomment');
		$pestcontrol_id = $this->input->post('pestcontrol_id');

		$clients = $this->ClientModel->get_client();


		foreach ($clients->result() as $c):
			if($c->username == $this->session->userdata('username'))
			{
						
				$idclient = $c->client_name;
			}
		endforeach;

		$add = array(

				'comment' => $this->input->post('txtcomment'),
				'client_id' => $idclient,
				'pestcontrol_id' => $pestcontrol_id

			);

			$this->CommentModel->insert($add);


	}

	public function update()
	{
		$comment = $this->input->post('updatecomment');

		$add = array(

				'comment' => $comment

			);

			$this->CommentModel->update($add);
			//redirect('Clients/show_pestcontrol/', 'refresh');
			//$this->_displayAlert('Successfully Updated');
	}

	public function soft_delete()
	{
		$id = $this->uri->segment(3);

		$data = array(

			'soft_delete' => 0

			);

		$this->CommentModel->update_delete($data, $id);
	}






	public function _displayAlert($message,$cont){
       	 echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }




}








?>