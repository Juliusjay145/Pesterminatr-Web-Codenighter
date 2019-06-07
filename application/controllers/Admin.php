<?php

class Admin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('ClientModel');
		$this->load->model('PestControlModel');
		$this->load->model('ResidentialModel');
		$this->load->model('CommentModel');
		$this->load->library('Session');
	}

	public function index()
	{
		$data['title'] = "Login Admin";
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/adminLogin_view');
		$this->load->view('template/footer_view');	
	}

	public function home()
	{
		$data['title'] = "Admin Home";
		$data['admins'] = $this->AdminModel->get_admin();
		$data['clients'] = $this->ClientModel->count_clients();
		$data['providers'] = $this->PestControlModel->count_providers();
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/adminhome_view');
		$this->load->view('template/footer_view');	
	}

	public function listusers()
	{
		$data['title'] = "Admin Home";
		$data['admins'] = $this->AdminModel->get_admin();
		$data['clients'] = $this->ClientModel->get_client();
		$datas=array('notification' => 0);
		$this->AdminModel->updatenotification($datas);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/AdminListUsers_view');
		$this->load->view('template/footer_view');	
	}

	public function listproviders()
	{
		$data['title'] = "Admin Home";
		$data['admins'] = $this->AdminModel->get_admin();
		$data['providers'] = $this->PestControlModel->get_pestcontrol();
	    $datas=array('notification' => 0);
	    $this->AdminModel->update($datas);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/AdminListProvider_view');
		$this->load->view('template/footer_view');	
	}

	public function list_history()
	{
		$data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
		$data['residential'] = $this->ResidentialModel->get_residential4();
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/viewbookingHistory_view');
		$this->load->view('template/footer_view');
	}

	public function listfeedback()
	{
		$data['title'] = "Admin Home";
		$data['comments'] = $this->CommentModel->get_comment();
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/listfeedback_view');
		$this->load->view('template/footer_view');	
	}

	public function updateproviders($pestcontrol_id)
	{
		$data['title'] = "Admin Update Pest Control Providers";
		$data['admins'] = $this->AdminModel->get_admin();
		$data['providers'] = $this->PestControlModel->get_pestcontrol();
		$data['update'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/AdminUpdateProviders_view');
		$this->load->view('template/footer_view');	
	}

	public function updateclients($client_id)
	{
		$data['title'] = "Admin Update Client";
		$data['admins'] = $this->AdminModel->get_admin();
		$data['client'] = $this->ClientModel->get_client();
		$data['update'] = $this->ClientModel->get_client_id($client_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/AdminUpdateClient_view');
		$this->load->view('template/footer_view');	
	}

	public function updateAdmin($admin_id)
	{
		$data['title'] = "Admin Update Account";
		$data['updateAdmin'] = $this->AdminModel->get_admin_id($admin_id);
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/AdminUpdateAccount_view');
		$this->load->view('template/footer_view');
	}

	public function valid()
	{
		

		$txtusername = $this->input->post('txtusername');
		$txtpassword = $this->input->post('txtpassword');

		$result = $this->AdminModel->auth($txtusername,$txtpassword);

		if($result){

				$validate = array(

						'username' =>$txtusername,
						'password' =>$txtpassword

					);
				$this->session->set_userdata($validate);

				if($result[0]['user_type']=='admin'){
					$this->_displayAlert('Welcome Admin','admin/home');
				}

		}
		else{
				$this->_displayAlert('Account Not Found','clients/valid');	
			}
	}

	public function updatePest()
	{
		$status = $this->input->post('status');

		$add = array(

			'status' => $status

			);

		$this->PestControlModel->update($add);
		$this->_displayAlert('Successfully Updated','admin/home');
	}

	public function updateClient()
	{
		$status = $this->input->post('status');

		$add = array(

			'status' => $status

			);

		$this->ClientModel->update($add);
		$this->_displayAlert('Successfully Updated','admin/home');
	}

	public function updateAccount()
	{
		$name = $this->input->post('txtname');
		$username = $this->input->post('txtusername');
		$password = $this->input->post('txtpassword');
		$retype = $this->input->post('txtretypepass');

		if($password != $retype)
		{
			echo "Password must be match";
		}
		else
		{
			$add = array(

			'admin_name' => $name,
			'username' => $username,
			'password' => $password

			);

			$this->AdminModel->update2($add);
		}


		

		
	}


	public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url('Admin/index'));
    }

	public function _displayAlert($message,$cont){
       	 echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }		



}




?>