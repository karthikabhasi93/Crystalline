<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index(){
        if(!empty($_POST)){
            // print_r($_POST['username']);die();
            $data = array(
                "username" => $_POST['username'],
                "password" => $this->input->post('password')
            );

            $res = $this->LoginModel->auth($data);

            if(!empty($res)){
                $this->session->set_userdata('admin_id',$res->username);
                redirect(base_url('admin'));
               
            }else{
                $this->session->set_flashdata('msg','You entered may be wrong Credentials');
                redirect(base_url('login'));
            }

            // echo "<pre>";
            // print_r($data);
        }
        $this->load->view("home");
    }
}