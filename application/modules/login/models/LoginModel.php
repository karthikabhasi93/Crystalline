<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    function auth($data){
        return $this->db->get_where('users',$data)->row();
        // return false;
    }
    
}