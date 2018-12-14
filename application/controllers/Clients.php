<?php

Class Clients extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');
		$this->load->model('ServiceModel');
		$this->load->model('PestControlModel');
		$this->load->library('Session');
		$this->load->model('ClientLogsModel');
	}

	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/login_view');
		$this->load->view('template/footer_view');
	}

	public function change_password($client_id)
	{
		$data['title'] = "Account Settings";
		$data['changepass'] = $this->ClientModel->get_client_id($client_id);
		$data['clients'] = $this->ClientModel->get_client();
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/changepass_view');
		$this->load->view('template/footer_view');
	}

	public function change_name($client_id)
	{
		$data['title'] = "Account Settings";
		$data['changename'] = $this->ClientModel->get_client_id($client_id);
		$data['clients'] = $this->ClientModel->get_client();
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/changename_view');
		$this->load->view('template/footer_view');
	}

	public function change_contact($client_id)
	{
		$data['title'] = "Account Settings";
		$data['changecontact'] = $this->ClientModel->get_client_id($client_id);
		$data['clients'] = $this->ClientModel->get_client();
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/changecontact_view');
		$this->load->view('template/footer_view');
	}

	public function home()
	{
		$data['title'] = "Home Client";
		$data['clients'] = $this->ClientModel->get_client();
		$data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/clienthome_view', $data);
		$this->load->view('template/footer_view');
	}

	public function register()
	{
		$data['title'] = "Register";
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/register_view');
		$this->load->view('template/footer_view');	
	}

	public function show_pestcontrol($pestcontrol_id)
    {
        $data['title'] = "Pest Control Provider";
        $data['getpest'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['services'] = $this->ServiceModel->get_services();
        $data['clients'] = $this->ClientModel->get_client();
        $this->load->view('template/header_view', $data);
        $this->load->view('pages/showpestcontrol_view');
        $this->load->view('template/footer_view');
    }

	public function addClient()
	{	
		$name = $this->input->post('name');
		$txtaddress = $this->input->post('txtaddress');
		$txtcontact = $this->input->post('txtcontact');
		$txtusername = $this->input->post('txtusername');
		$txtpassword = $this->input->post('txtpassword');

		$add = array(

			'client_name' => $name,
			'client_address' => $txtaddress,
			'client_contact' => $txtcontact,
			'username' => $txtusername,
			'password' => $txtpassword,
			'user_type' => 'Client'

			);

		$this->ClientModel->insert($add);
		$this->_displayAlert('Account Inerted','clients/index');
	}

	public function valid()
	{
		

		$txtusername = $this->input->post('txtusername');
		$txtpassword = $this->input->post('txtpassword');


		$result = $this->ClientModel->auth($txtusername,$txtpassword);

		if($result){

				$validate = array(

						'username' =>$txtusername,
						'password' =>$txtpassword

					);
				$this->session->set_userdata($validate);

				// if($result[0]['user_type']=='Client'){
				// 	$this->_displayAlert('Welcome Client','clients/home');
				// }

				 if($result[0]['status']=='Active'){
                    
                    if($result[0]['user_type']=='Client'){
                    $this->_displayAlert('Welcome Pest Control Provider','Clients/home');
                    
                    }

                }

                else{
                    $this->_displayAlert('Please contact the admin to update your status','Clients/valid');
                } 

		}
		else{
				$this->_displayAlert('Account Not Found','clients/valid');	
			}

			$clients = $this->ClientModel->get_client();
			$logs = $this->ClientLogsModel->get_logs();

			foreach($clients->result() as $d):
					if($d->username == $this->session->username)
					{
						$id = $d->client_id;	
					}
			endforeach;			

			$data = array(

					'client_id' => $id,
					'action' => 'Online'

			);
			$time = array(
				'time_in' => date('Y-m-d h:i:s')
				);
					foreach ($logs->result() as  $log):
					$sd=$log->client_id;
					endforeach;	
					foreach ($clients->result() as  $client):

						if($client->username==$this->input->post('txtusername')){
							if($sd!=$client->client_id){
								$this->ClientLogsModel->insert($data);
							}
							elseif($sd==$client->client_id){
								$this->ClientLogsModel->updatelogs(date(),$sd);
							}
						}
					endforeach;	
	}

	public function updatepassword()
	{
		$txtpassword = $this->input->post('txtpassword');

		$add = array(

			'password' => $txtpassword

			);

		$this->ClientModel->update($add);
		$this->_displayAlert('Password has been changed','clients/home');

	}

	public function updatename()
	{
		$txtname = $this->input->post('txtname');

		$add = array(

			'client_name' => $txtname

			);

		$this->ClientModel->update($add);
		$this->_displayAlert('Name has been changed','clients/home'); 

	}

	public function updatecontact()
	{
		$txtcontact = $this->input->post('txtcontact');

		$add = array(

			'client_contact' => $txtcontact

			);

		$this->ClientModel->update($add);
		$this->_displayAlert('Contact Number has been changed','clients/home');

	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url('clients/index'));
	}

	public function _displayAlert($message,$cont){
       	 echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }












}


?>