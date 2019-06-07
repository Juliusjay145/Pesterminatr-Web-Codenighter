<?php

class ReplyComment extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ReplyCommentModel');
		$this->load->model('PestControlModel');

		$this->load->model('CommentModel');
		$this->load->model('ClientModel');
	}

	public function reply($comment_id)
	{
		$data['title'] = "Reply Comment";
		$data['comments'] = $this->CommentModel->get_comment_id($comment_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/replycomment_view');
		$this->load->view('template/footer_view');
	}

	// public function reply($comment_id)
	// {
	// 	$data['title'] = "Reply Comment";
	// 	$data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
 //        $data['clientsname'] = $this->ClientModel->get_client();
 //        //$data['services'] = $this->ServiceModel->get_services3();
	// 	$data['comments'] = $this->CommentModel->get_comment_id($comment_id);
	// 	$data['comments'] = $this->CommentModel->get_comment();
	// 	$data['replys'] = $this->ReplyCommentModel->get_reply_comment();
	// 	//$this->load->view('template/header_view', $data);
	// 	$this->load->view('pages/reply_view', $data);
	// 	//$this->load->view('template/footer_view');
	// }

	public function reply_update($reply_id)
	{
		$data['title'] = "Reply Comment";
		$data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        //$data['services'] = $this->ServiceModel->get_services3();
		//$data['comments'] = $this->CommentModel->get_comment_id($comment_id);
		$data['comments'] = $this->CommentModel->get_comment();
		$data['update'] = $this->ReplyCommentModel->get_reply_id($reply_id);
		//$data['replys'] = $this->ReplyCommentModel->get_reply_comment();
		//$this->load->view('template/header_view', $data);
		$this->load->view('pages/replyEdit_view', $data);
		//$this->load->view('template/footer_view');
	}


	public function reply_comment()
	{
		$reply = $this->input->post('txtreply');
		$comment_id = $this->input->post('comment_id');

		$pestcontrols = $this->PestControlModel->get_pestcontrol();


		foreach ($pestcontrols as $p):
			if($p['username'] == $this->session->userdata('username'))
			{
						
				$idclient = $p['pestcontrol_name'];
			}
		endforeach;

		$add = array(

			'reply' => $reply,
			'comment_id' => $comment_id,
			'pestcontrol_id' => $idclient

			);

		$this->ReplyCommentModel->insert($add);
		//redirect(base_url('pestcontrol/feedback'));
	}

	public function update()
	{
		$txtupdate = $this->input->post('txtupdate');

		$add = array(

			'reply' => $txtupdate

			);

		$this->ReplyCommentModel->update($add);
	}



}










?>