<?php

Class Clients extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');
		$this->load->model('ServiceModel');
		$this->load->model('PestControlModel');
		$this->load->library('Session');
		$this->load->model('CommentModel');
		$this->load->model('ClientLogsModel');
		$this->load->model('CommercialModel');
		$this->load->model('ReplyCommentModel');
		$this->load->model('ResidentialModel');
		$this->load->model('ServiceModel');
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
		$data['residentials'] = $this->ResidentialModel->get_residential();
    	$data['commercials'] = $this->CommercialModel->get_commercial();
    	//$data['c'] = $this->ClientModel->get_client_id($client_id);
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
        $data['comments'] = $this->CommentModel->get_comment();
        $data['replys'] = $this->ReplyCommentModel->get_reply_comment();
        $this->load->view('template/header_view', $data);
        $this->load->view('pages/showpestcontrol_view');
        $this->load->view('template/footer_view');
    }

    public function show_details($pestcontrol_id)
    {
        $data['title'] = "Pest Control Provider";
        $data['getpest'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['services'] = $this->ServiceModel->get_services();
        $data['clients'] = $this->ClientModel->get_client();
        $this->load->view('template/header_view', $data);
        $this->load->view('pages/pestcontrolprofile_view');
        $this->load->view('template/footer_view');
    }

    public function show_booking($client_id)
    {
    	$data['title'] = "My Booking Details";
    	$data['residentials'] = $this->ResidentialModel->get_residential();
    	$data['services'] = $this->ServiceModel->get_services();
    	$data['commercials'] = $this->CommercialModel->get_commercial();
    	$data['clients'] = $this->ClientModel->get_client_id($client_id);
    	$this->load->view('template/header_view', $data);
    	$this->load->view('pages/bookingdetails_view');
    	$this->load->view('template/footer_view');
    }

     public function history_booking($client_id)
    {
    	$data['title'] = "History Details";
    	$data['residentials'] = $this->ResidentialModel->get_residential8();
    	$data['services'] = $this->ServiceModel->get_services();
    	$data['commercials'] = $this->CommercialModel->get_commercial5();
    	$data['clients'] = $this->ClientModel->get_client_id($client_id);
    	$this->load->view('template/header_view', $data);
    	$this->load->view('pages/clientsHistory_view');
    	$this->load->view('template/footer_view');
    }


    public function update_detials($residential_id)
    {
    	$data['title'] = "Update Details";
    	$data['residentials'] = $this->ResidentialModel->get_residential_id($residential_id);
    	$data['clients'] = $this->ClientModel->get_client();
    	$this->load->view('template/header_view', $data);
    	$this->load->view('pages/updateDetails_view', $data);
    	$this->load->view('template/footer_view', $data);
    }

    public function update_comdetials($commercial_id)
    {
    	$data['title'] = "Update Details";
    	$data['commercials'] = $this->CommercialModel->get_commercial_id($commercial_id);
    	$data['clients'] = $this->ClientModel->get_client();
    	$this->load->view('template/header_view', $data);
    	$this->load->view('pages/updateDetailsCommercial_view', $data);
    	$this->load->view('template/footer_view', $data);
    }

	public function addClient()
	{	
		$name = $this->input->post('name');
		$lastname = $this->input->post('lastname');
		$txtaddress = $this->input->post('txtaddress');
		$txtcontact = $this->input->post('txtcontact');
		$txtusername = $this->input->post('txtusername');
		$txtpassword = $this->input->post('txtpassword');


		if(strlen($txtpassword) <= 5)
		{
			$this->_displayAlert('Password must be 6 minimum characters','clients/register');
		}
		else if(strlen($name) <= 5)
		{
			$this->_displayAlert('Name must be 6 minimum characters','clients/register');
		}
		else
		{
			$clients = $this->ClientModel->get_client();

			foreach ($clients->result() as $c):
				$c->username;
				$c->client_name;
			endforeach;

			

			if($txtusername != $c->username && $name != $c->client_name)
			{
				$add = array(

				'client_name' => $name,
				'client_lastname' => $lastname,
				'client_address' => $txtaddress,
				'client_contact' => $txtcontact,
				'username' => $txtusername,
				'password' => $txtpassword,
				'user_type' => 'Client'

				);

				$this->ClientModel->insert($add);
				$this->_displayAlert('Account Inerted','clients/index');
			}

			else
			{
				

				foreach ($clients->result() as $c):
					if($txtusername == $c->username)
					{
						$this->_displayAlert('Account already exist','clients/register');	
					}
					else if($name == $c->client_name)
					{
						$this->_displayAlert('Account already exist','clients/register');
					}

					
				endforeach;

					
			}	
		}


		

		
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

	public function updateDetails()
	{
		$txtproblem = $this->input->post('txtproblem');
		$txtaddress = $this->input->post('txtaddress');
		$txtdate = $this->input->post('txtdate');
		$txttime = $this->input->post('txttime');
		

		$add = array(

				'problem' => $txtproblem,
				'residential_address' => $txtaddress,
				'date' => $txtdate,
				'time' => $txttime,


			);

		$this->ResidentialModel->update($add);
	}

	public function updateDetailsCom()
	{
		$txtproblem = $this->input->post('txtproblem');
		$txtaddress = $this->input->post('txtaddress');
		$txtdate = $this->input->post('txtdate');
		$txttime = $this->input->post('txttime');
		

		$add = array(

				'problem' => $txtproblem,
				'company_address' => $txtaddress,
				'date' => $txtdate,
				'time' => $txttime,


			);

		$this->ResidentialModel->update($add);
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