<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct(){
        parent::__construct();
        if(empty($this->session->userdata('admin_id'))){
            redirect(base_url('login'));
        }
    }

    public function index(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('users');
            $crud->set_subject('user');

            $crud->change_field_type('password', 'password');
            $crud->where('isadmin !=','yes');
            $crud->columns(['username']);
            $crud->add_fields(array('username','password'));
            $crud->edit_fields(array('username','password'));
            $crud->unset_clone();
            $crud->unset_read();
            // $crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
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

    public function aboutslider(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('aboutslider');
            $crud->set_subject('About Slider');

            $crud->set_field_upload('image','assets/uploads/files');
            // $crud->change_field_type('password', 'password');
            // $crud->where('isadmin !=','yes');
            // $crud->columns(['username']);
            // $crud->add_fields(array('username','password'));
            // $crud->edit_fields(array('username','password'));
            $crud->unset_clone();
            $crud->unset_read();
            // $crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function contact(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('contactform');
            $crud->set_subject('contacts');

            $crud->set_field_upload('image','assets/uploads/files');
            $crud->unset_clone();
            $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_export();
            $crud->unset_add();
            $crud->unset_read();
            // $crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function feedback(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('feedback');
            $crud->set_subject('Testimonial');

            $crud->set_field_upload('photo','assets/uploads/files');
            $crud->unset_clone();
            // $crud->unset_edit();
            // $crud->unset_delete();
            $crud->unset_export();
            // $crud->unset_add();
            $crud->unset_read();
            // $crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function findus(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('findus');
            $crud->set_subject('Site Seetings');

            // $crud->set_field_upload('photo','assets/uploads/files');
            $crud->unset_clone();
            // $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_export();
            $crud->unset_add();
            $crud->unset_delete();
            $crud->unset_read();
            // $crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    public function banner(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('mainslider');
            $crud->set_subject('About Slider');

            $crud->set_field_upload('image','assets/uploads/files', 'jpg|gif|png' , '25|25');
            $crud->callback_before_upload(array($this,'banner_validate'));
            // $crud->change_field_type('password', 'password');
            // $crud->where('isadmin !=','yes');
            // $crud->columns(['username']);
            // $crud->add_fields(array('username','password'));
            // $crud->edit_fields(array('username','password'));
            $crud->unset_clone();
            $crud->unset_read();
            // $crud->callback_insert(array($this,'encrypt_password_and_insert_callback'));
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }

    function banner_validate($files_to_upload,$field_info)
    {

        foreach($files_to_upload as $value) {
            $ext = pathinfo($value['name'], PATHINFO_EXTENSION);
            $t = getimagesize($value['tmp_name']);
        }
        // return $t[0]."/".$t[1];
        if($t[0]!==555 && $t[1]!==349){
            return "Your select image width is ".$t[0]." and height is ".$t[1].", which are not matching the proportions please follow Image size with width 555 and height 349";
        }else{
            return true;
        }

    }
    function services(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('services');
            $crud->set_subject('service');
            $crud->set_field_upload('icon','assets/uploads/files');
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_clone();
            $output = $crud->render();
            

			$this->load->view("home",$output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
    }
    function gallery(){
        try{
			$crud = new grocery_CRUD();
			$crud->set_theme('tablestrap4');
            $crud->set_table('gallery');
            $crud->set_subject('Gallery');
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

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
}