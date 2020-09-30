<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function index(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
            $crud->set_table('users');
            $crud->change_field_type('password', 'password');
 
            $crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
        
    }

    function encrypt_password_and_insert_callback($post_array) {
        $post_array['password'] = md5($post_array['password']);
        return $this->db->insert('users',$post_array);
      }  

    function slider(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
            $crud->set_table('mainslider');
            $crud->set_field_upload('image','assets/uploads/files');
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_clone();
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }

    function aboutus(){
        
    }
}