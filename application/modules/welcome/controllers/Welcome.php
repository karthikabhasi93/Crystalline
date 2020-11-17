<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function index()
	{
		$page_data['mainslider'] = $this->db->get('mainslider')->result();
		$page_data['about_slider'] = $this->db->get('aboutslider')->result();
		$page_data['services'] = $this->db->get('services')->result();
		$page_data['settings'] = $this->db->get('findus')->row();
		$page_data['feedback'] = $this->db->get('feedback')->result();
		$page_data['gallery'] = $this->db->get('gallery')->result();
		$this->load->view('welcome_message',$page_data);
	}

	public function form(){
		// print_r($_POST['data']);
		$value = $_POST['data'];
		$data =[];
		foreach($value as $d){
			$data[$d['name']] = $d['value'];
		}
		$this->db->insert('contactform',$data);
		if($this->db->insert_id()){
			$output= array(
				"status"=>200,
				"message"=>"Our official will contact you very soon"
			);
			echo json_encode($output);
		}else{
			$output= array(
				"status"=>300,
				"message"=>"Something happended on server"
			);
			echo json_encode($output);
		}
	}

	public function view(){
		$this->load->view('360');
	}

	
}
