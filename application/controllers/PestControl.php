<?php

Class PestControl extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
        $this->load->model('PestControlModel');
        $this->load->model('PestLogsModel');
        $this->load->model('ClientModel');
		$this->load->model('ServiceModel');
		$this->load->library('Session');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/plogin_view');
		$this->load->view('template/footer_view');
	}

	public function register()
	{
		$data['title'] = "Register";
		$this->load->view('template/header_view', $data);
		$this->load->view('pages/pregister_view', array('error' => ''));
		$this->load->view('template/footer_view');
	}

    public function home()
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['services'] = $this->ServiceModel->get_services();
        $this->load->view('template/header_view', $data);
        $this->load->view('pages/pestcontrolhome_view');
        $this->load->view('template/footer_view');
    }

     public function update($pestcontrol_id)
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['update'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
        $data['services'] = $this->ServiceModel->get_services();
        $this->load->view('template/header_view', $data);
        $this->load->view('pages/ManagePestControlAccount_view');
        $this->load->view('template/footer_view');
    }


	public function do_upload(){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('pages/pregister_view', $error);
                }
                else
                {
                    
                        $data = array('upload_data' => $this->upload->data());
                }
    }
    public function registerpest()
	{
		$name = $this->input->post('name');
		$txtaddress = $this->input->post('txtaddress');
        $txtcontact = $this->input->post('txtcontact');
		$txtdetails = $this->input->post('txtdetails');
		$txtusername = $this->input->post('txtusername');
		$txtpassword = $this->input->post('txtpassword');

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

    
         $this->load->library('upload', $config);


        if (!$this->upload->do_upload('file1')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('pages/pregister_view', $error);
        }

        if (!$this->upload->do_upload('file2')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('pages/pregister_view', $error);
        }
        else
        {   
                $data = array('upload_data' => $this->upload->data());
                $data = array('upload_data' => $this->upload->data());

                $add = array(
                    'pestcontrol_name' => $this->input->post('name'),
                   	'pestcontrol_address' => $this->input->post('txtaddress'),
                    'pestcontrol_contact' => $this->input->post('txtcontact'),
                    'pestcontrol_detail' => $this->input->post('txtdetails'),
					'username' => $this->input->post('txtusername'),
                    'password' => $this->input->post('txtpassword'),
                    "certificate1"=>$data['upload_data']['file_name'],
                    "certificate2"=>$data['upload_data']['file_name'],
                    "user_type" => 'pestcontrol'
                
                );
                $this->PestControlModel->insert($add);
                $this->_displayAlert('Account Inerted','PestControl/index', $data);
        }

	}

    public function valid()
    {
        $txtusername = $this->input->post('txtusername');
        $txtpassword = $this->input->post('txtpassword');

        $result = $this->PestControlModel->auth($txtusername,$txtpassword);

        if($result){

                $validate = array(

                        'username' =>$txtusername,
                        'password' =>$txtpassword

                    );
                $this->session->set_userdata($validate);

                if($result[0]['status']=='Active'){
                    
                    if($result[0]['user_type']=='pestcontrol'){
                    $this->_displayAlert('Welcome Pest Control Provider','PestControl/home');
                    
                    }

                }

                else{
                    $this->_displayAlert('Please contact the admin to update your status','PestControl/valid');
                } 

        }
        else{
                $this->_displayAlert('Account Not Found','PestControl/valid'); 
            }

            $data = $this->PestControlModel->get_pestcontrol();
                foreach($data->result() as $d):
                    if($d->username == $this->session->username)
                    {
                        $id = $d->pestcontrol_id;
                    }
                endforeach;

        $add = array(

            'pestcontrol_id' => $id,
            'action' => 'Online'

            );

        $this->PestLogsModel->insert($add);
    }

    public function updateAccount()
    {
        $txtname = $this->input->post('name');
        $txtaddress = $this->input->post('txtaddress');
        $txtcontact = $this->input->post('txtcontact');
        $txtdetail = $this->input->post('txtdetails');

        $add = array(

            'pestcontrol_name' => $txtname,
            'pestcontrol_address' => $txtaddress,
            'pestcontrol_contact' => $txtcontact,
            'pestcontrol_detail' => $txtdetail

            );

        $this->PestControlModel->update($add);
        $this->_displayAlert('Account has been updated','pestcontrol/home');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url('pestcontrol/index'));
    }

    


	

	public function _displayAlert($message,$cont){
       	 echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }












}


?>