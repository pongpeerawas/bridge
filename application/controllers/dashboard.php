<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	// public function __construct ()
	// 	{
	// 		parent::__construct();
	// 		if($this->session->userdata('group')!=	('1') )
	// 		{
	// 			$this->session->set_flashdata('error','ไม่ได้กินฉันหรอก');
	// 			redirect('fontEnd/login');
	// 		}
	//
	// 	}


	public function index()
	{
		$this->load->view('Template/Header');
		$this->load->view('Template/Sidebar');
		$this->load->view('dashboard');
		$this->load->view('Template/Footer');
	}


}
