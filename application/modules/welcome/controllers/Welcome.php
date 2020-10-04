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
}
