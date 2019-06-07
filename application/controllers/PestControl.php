<?php

Class PestControl extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
        $this->load->model('PestControlModel');
        $this->load->model('PestLogsModel');
        $this->load->model('ClientModel');
		$this->load->model('ServiceModel');
        $this->load->model('ResidentialModel');
        $this->load->model('CommercialModel');
        $this->load->model('ReplyCommentModel');
        $this->load->model('CommentModel');
        $this->load->model('ScheduleModel');
        $this->load->dbutil();
        $this->load->helper('file');
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
		$this->load->view('pages/pregister_view');
		$this->load->view('template/footer_view');
	}

    public function home()
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        $data['services'] = $this->ServiceModel->get_services();
        $data['serv'] = $this->ServiceModel->get_services7();
        $data['serve'] = $this->ServiceModel->get_services3();
        $data['residentials'] = $this->ResidentialModel->get_residential();
        $data['schedules'] = $this->ScheduleModel->get_schedule();
        $data['residential'] = $this->ResidentialModel->get_residential4();
        $data['comments'] = $this->CommentModel->get_comment();
        $data['commercials'] = $this->CommercialModel->get_commercial();
        $data['commercial'] = $this->CommercialModel->get_commercial4();
        $data['clients'] = $this->ResidentialModel->count_residential();
        $data['total'] = $this->ResidentialModel->total(); 
        $data['totals'] = $this->CommercialModel->total();
        $datas=array('notification' => 0);
        $this->ResidentialModel->updatenotification($datas);
        $data['clients_commercial'] = $this->CommercialModel->count_commercial();
        $d=array('notification' => 0);
        $this->CommercialModel->updatenotif($d);
        $this->load->view('template/header_view', $data);
        $this->load->view('pages/pestcontrolhome_view');
        $this->load->view('template/footer_view');
    }

    

    // public function home()
    // {
    //     $data['title'] = "Home Pest Control Provider";
    //     $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
    //     $data['clientsname'] = $this->ClientModel->get_client();
    //     $data['services'] = $this->ServiceModel->get_services();
    //     $id = 1;
    //     $data['ser'] = $this->ServiceModel->count_service($id);
    //     $data['residentials'] = $this->ResidentialModel->get_residential();
    //     $data['residential'] = $this->ResidentialModel->get_residential4();
    //     $data['comments'] = $this->CommentModel->get_comment();
    //     $data['clients'] = $this->ResidentialModel->count_residential($id);    
    //     $data['res'] = $this->ResidentialModel->count_totalresidential($id);
    //     $data['con'] = $this->ResidentialModel->count_totalconfirm();
    //     $datas=array('notification' => 0);
    //     $this->ResidentialModel->updatenotification($datas);
    //     //$this->load->view('template/header_view', $data);
    //     $this->load->view('pages/pestcontrolhome2_view', $data);
    //     //$this->load->view('template/footer_view');
    // }

    public function list_commercials()
    {
        $data['commercials'] = $this->CommercialModel->get_commercial();
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $this->load->view('pages/list_commercial_view', $data);
    }

    public function transaction_residential()
    {
        $data['title'] = "Residential";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        $data['services'] = $this->ServiceModel->get_services();
        $id = 1;
        $data['ser'] = $this->ServiceModel->count_service($id);
        $data['residentials'] = $this->ResidentialModel->get_residential();
        $data['residential'] = $this->ResidentialModel->get_residential4();
        $data['comments'] = $this->CommentModel->get_comment();
        $data['clients'] = $this->ResidentialModel->count_residential();    
        $data['res'] = $this->ResidentialModel->count_totalresidential($id);
        $data['con'] = $this->ResidentialModel->count_totalconfirm();
        $datas=array('notification' => 0);
        $this->ResidentialModel->updatenotification($datas);
        $this->load->view('pages/residentialBook_view', $data);
    }

    public function service_detail()
    {
        $data['title'] = "Residential";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        $data['services'] = $this->ServiceModel->get_services();
        $id = 1;
        $data['ser'] = $this->ServiceModel->count_service($id);
        $data['residentials'] = $this->ResidentialModel->get_residential();
        $data['residential'] = $this->ResidentialModel->get_residential4();
        $data['comments'] = $this->CommentModel->get_comment();
        $data['clients'] = $this->ResidentialModel->count_residential();    
        $data['res'] = $this->ResidentialModel->count_totalresidential($id);
        $data['con'] = $this->ResidentialModel->count_totalconfirm();
        $datas=array('notification' => 0);
        $this->ResidentialModel->updatenotification($datas);
        $this->load->view('pages/ListService_view', $data);
    }

    public function add_service()
    {
        $data['title'] = "Residential";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        $data['services'] = $this->ServiceModel->get_services();
        $id = 1;
        $data['ser'] = $this->ServiceModel->count_service($id);
        $data['residentials'] = $this->ResidentialModel->get_residential();
        $data['residential'] = $this->ResidentialModel->get_residential4();
        $data['comments'] = $this->CommentModel->get_comment();
        $data['clients'] = $this->ResidentialModel->count_residential();    
        $data['res'] = $this->ResidentialModel->count_totalresidential($id);
        $data['con'] = $this->ResidentialModel->count_totalconfirm();
        $datas=array('notification' => 0);

        $this->ResidentialModel->updatenotification($datas);
        $this->load->view('pages/addService_view', $data);
    }

    public function history()
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        $data['services'] = $this->ServiceModel->get_services();
        $id = 1;
        $data['ser'] = $this->ServiceModel->count_service($id);
        $data['residentials'] = $this->ResidentialModel->get_residential();
        $data['residential'] = $this->ResidentialModel->get_residential4();
        $data['comments'] = $this->CommentModel->get_comment();
        $data['clients'] = $this->ResidentialModel->count_residential($id);    
        $data['res'] = $this->ResidentialModel->count_totalresidential($id);
        $data['con'] = $this->ResidentialModel->count_totalconfirm();

        

        $this->load->view('pages/ListHistory_view', $data);



    }

    public function history_commercial()
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();   
        $data['commercials'] = $this->CommercialModel->get_commercial4(); 
    

        $this->load->view('pages/listhistorycommercial_view', $data);



    }


    


    public function recyclebin()
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        $data['services'] = $this->ServiceModel->get_services3();
        $id = 1;
        $data['ser'] = $this->ServiceModel->count_service($id);
        $data['residentials'] = $this->ResidentialModel->get_residential();
        $data['residential'] = $this->ResidentialModel->get_residential4();
        $data['comments'] = $this->CommentModel->get_comment();
        $data['clients'] = $this->ResidentialModel->count_residential($id);    
        $data['res'] = $this->ResidentialModel->count_totalresidential($id);
        $data['con'] = $this->ResidentialModel->count_totalconfirm();

        

        $this->load->view('pages/RecycleBin_view', $data);



    }


    public function feedback()
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['clientsname'] = $this->ClientModel->get_client();
        $data['services'] = $this->ServiceModel->get_services3();
        $id = 1;
        $data['ser'] = $this->ServiceModel->count_service($id);
        $data['residentials'] = $this->ResidentialModel->get_residential();
        $data['residential'] = $this->ResidentialModel->get_residential4();
        $data['comments'] = $this->CommentModel->get_comment();
        $data['replys'] = $this->ReplyCommentModel->get_reply_comment();
        $data['clients'] = $this->ResidentialModel->count_residential($id);    
        $data['res'] = $this->ResidentialModel->count_totalresidential($id);
        $data['con'] = $this->ResidentialModel->count_totalconfirm();

        
        $this->load->view('pages/feedback_view', $data);



    }

    // public function version()
    // {
    //     $data['title'] = "Home Pest Control Provider";
    //     $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
    //     $data['clientsname'] = $this->ClientModel->get_client();
    //     $data['services'] = $this->ServiceModel->get_services();
    //     $data['residentials'] = $this->ResidentialModel->get_residential();
    //     $data['residential'] = $this->ResidentialModel->get_residential4();
    //     $data['comments'] = $this->CommentModel->get_comment();
    //     $data['clients'] = $this->ResidentialModel->count_residential();
    //     $datas=array('notification' => 0);
    //     $this->ResidentialModel->updatenotification($datas);
    //     //$this->load->view('template/header_view', $data);
    //     $this->load->view('pages/pestcontrolhome2_view');
    //     //$this->load->view('template/footer_view');
    // }

     // public function pestcontol($pestcontrol_id)
     // {
     //    $data['title'] = "Home Pest Control Provider";
     //    $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
     //    $data['update'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
     //    $data['services'] = $this->ServiceModel->get_services();
     //    $this->load->view('template/header_view', $data);
     //    $this->load->view('pages/pestcontrolhome_view');
     //    $this->load->view('template/footer_view');
     // }


    public function update($pestcontrol_id)
    {
        $data['title'] = "Home Pest Control Provider";
        $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
        $data['update'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
        $data['services'] = $this->ServiceModel->get_services();
        $this->load->view('template/header_view', $data);
        $this->load->view('pages/ManagePestControlAccount_view', $data);
        $this->load->view('template/footer_view');
    }

    // public function edit($pestcontrol_id)
    // {
    //     $data['title'] = "Home Pest Control Provider";
    //     $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
    //     $data['update'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
    //     $data['services'] = $this->ServiceModel->get_services();
    //      $this->load->view('template/header_view', $data);
    //      $this->load->view('pages/ManagePestControlAccount_view', $data);
    //      $this->load->view('template/footer_view');
    // }

    // public function update($pestcontrol_id)
    // {
    //     $data['title'] = "Home Pest Control Provider";
    //     $data['pestcontrols'] = $this->PestControlModel->get_pestcontrol();
    //     $data['update'] = $this->PestControlModel->get_pestcontrol_id($pestcontrol_id);
    //     $data['services'] = $this->ServiceModel->get_services();
    //     //$this->load->view('template/header_view', $data);
    //     $this->load->view('pages/pestcontrolupdate_view', $data);
    //     //$this->load->view('template/footer_view');
    // }


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
        //$txtconfirm = $this->input->post('txtconfimmpassword');


        $image = $this->input->post('file3');
        $path = "http://10.0.2.2/project/upload/". $image;

         $add = array(
                'pestcontrol_name' => $this->input->post('name'),
                'pestcontrol_address' => $this->input->post('txtaddress'),
                'pestcontrol_contact' => $this->input->post('txtcontact'),
                'pestcontrol_detail' => $this->input->post('txtdetails'),
                'username' => $this->input->post('txtusername'),
                'password' => $this->input->post('txtpassword'),
                "certificate1"=> $this->input->post('file1'),
                "certificate2"=> $this->input->post('file2'),
                "logo"=> $image,
                "path_image"=> $path,
                "user_type" => 'pestcontrol'
                        
                        );
                        $this->PestControlModel->insert($add);
                        $this->_displayAlert('Account Inerted','PestControl/index');

        if(strlen($name) <= 5)
        {
            $this->_displayAlert('Name must be 6 minimum characters','PestControl/register');   
        }
        else if(strlen($txtpassword) <= 5)
        {
            $this->_displayAlert('Password must be 6 minimun characters','PestControl/register');
        }

        $pest = $this->PestControlModel->get_pestcontrol();

        foreach ($pest as $p): 
                    
                        if($txtusername == $p['username'])
                        {
                            $this->_displayAlert('Account has been already taken','PestControl/register');
                        }
                        else if($name == $p['pestcontrol_name'])
                        {
                            $this->_displayAlert('Account has been already taken','PestControl/register');
                        }

                    endforeach;
        // else
        // {
        //         $pest = $this->PestControlModel->get_pestcontrol();

        //     // $config['upload_path']          = './uploads/';
        //     // $config['allowed_types']        = 'jpg|png';
        //     // $config['max_size']             = 10000;
        //     // $config['max_width']            = 10000;
        //     // $config['max_height']           = 10000;

        
        //     //  $this->load->library('upload', $config);


        //     // if (!$this->upload->do_upload('file1')){
        //     //         $error = array('error' => $this->upload->display_errors());
        //     //         $this->load->view('pages/pregister_view', $error);
        //     // }

        //     // if (!$this->upload->do_upload('file2')){
        //     //         $error = array('error' => $this->upload->display_errors());
        //     //         $this->load->view('pages/pregister_view', $error);
        //     // }
        //     else
        //     {   

        //         foreach ($pest as $p):
        //             $p['username'];
        //             $p['pestcontrol_name'];
        //         endforeach;

        //         if($txtusername != $p['username'] && $name != $p['pestcontrol_name'])
        //         {
        //             // $data = array('upload_data' => $this->upload->data());
        //             //     $data = array('upload_data' => $this->upload->data());

        //                 $add = array(
        //                     'pestcontrol_name' => $this->input->post('name'),
        //                     'pestcontrol_address' => $this->input->post('txtaddress'),
        //                     'pestcontrol_contact' => $this->input->post('txtcontact'),
        //                     'pestcontrol_detail' => $this->input->post('txtdetails'),
        //                     'username' => $this->input->post('txtusername'),
        //                     'password' => $this->input->post('txtpassword'),
        //                     "certificate1"=>$data['upload_data']['file_name'],
        //                     "certificate2"=>$data['upload_data']['file_name'],
        //                     "user_type" => 'pestcontrol'
                        
        //                 );
        //                 $this->PestControlModel->insert($add);
        //                 $this->_displayAlert('Account Inerted','PestControl/index', $data);
        //         }

        //         else{

        //             foreach ($pest as $p): 
                    
        //                 if($txtusername == $p['username'])
        //                 {
        //                     $this->_displayAlert('Account has been already taken','PestControl/register');
        //                 }
        //                 else if($name == $p['pestcontrol_name'])
        //                 {
        //                     $this->_displayAlert('Account has been already taken','PestControl/register');
        //                 }

        //             endforeach;
        //         }
   
        //}



        
                

                        // $data = array('upload_data' => $this->upload->data());
                        // $data = array('upload_data' => $this->upload->data());

                        // $add = array(
                        //     'pestcontrol_name' => $this->input->post('name'),
                        //     'pestcontrol_address' => $this->input->post('txtaddress'),
                        //     'pestcontrol_contact' => $this->input->post('txtcontact'),
                        //     'pestcontrol_detail' => $this->input->post('txtdetails'),
                        //     'username' => $this->input->post('txtusername'),
                        //     'password' => $this->input->post('txtpassword'),
                        //     "certificate1"=>$data['upload_data']['file_name'],
                        //     "certificate2"=>$data['upload_data']['file_name'],
                        //     "user_type" => 'pestcontrol'
                        
                        // );
                        // $this->PestControlModel->insert($add);
                        // $this->_displayAlert('Account Inerted','PestControl/index', $data);
               


                   
            //}
        

		

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

        $image = $this->input->post('pestcontrol_logo');
        $path = "http://10.0.2.2/project/upload/". $image;

        $add = array(

            'pestcontrol_name' => $txtname,
            'pestcontrol_address' => $txtaddress,
            'pestcontrol_contact' => $txtcontact,
            'pestcontrol_detail' => $txtdetail,
            'logo' => $image

            );

        $this->PestControlModel->update($add);
        $this->_displayAlert('Account has been updated','pestcontrol/home');
        //redirect(base_url('PestControl/update'));
    }
    //residential
    public function confirm()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Confirm'

            );
        $this->ResidentialModel->updateconfirm($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function cancel()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Cancel'

            );
        $this->ResidentialModel->updateconfirm($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function resched()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Re-Schedule'

            );
        $this->ResidentialModel->updateconfirm($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function paid()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Paid'

            );
        $this->ResidentialModel->updateconfirm($data, $id);
        redirect(base_url('pestcontrol/home'));
    }


    public function complete()
    {
        $id = $this->uri->segment(3);
        $data = array(

            'confirm' => 0,
            'status' => 'Completed'

            );
        $this->ResidentialModel->updateconfirm($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    //commercial
    public function commercial_confirm()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Confirm'

            );
        $this->CommercialModel->updatecon($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function commercial_cancel()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Cancel'

            );
        $this->CommercialModel->updatecon($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function commercial_resched()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Re-Schedule'

            );
        $this->CommercialModel->updatecon($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function commercial_paid()
    {
        $id = $this->uri->segment(3);
        $data = array(

            //'confirm' => 0,
            'status' => 'Paid'

            );
        $this->CommercialModel->updatecon($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function commercial_complete()
    {
        $id = $this->uri->segment(3);
        $data = array(

            'confirm' => 0,
            'status' => 'Completed'

            );
        $this->CommercialModel->updatecon($data, $id);
        redirect(base_url('pestcontrol/home'));
    }

    public function delete_comment()
    {
        $id = $this->uri->segment(3);
        $data = array(


            'soft_delete' => 0


            );

        $this->CommentModel->update_delete($data, $id);
        redirect(base_url('pestcontrol/home'));
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