<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function index(){
        if(!empty($_POST)){
            // print_r($_POST['username']);die();
            $data = array(
                "username" => $_POST['username'],
                "password" => $this->input->post('password')
            );

            // echo "<pre>";
            // print_r($data);
        }
        $this->load->view("home");
    }
}