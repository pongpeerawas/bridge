<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class printReport extends CI_Controller {


	public function index()
	{
			$q['renter'] = $this->contract_model->read_db_Report();
		$this->load->view('Template/Header');
		$this->load->view('Template/Sidebar');
		$this->load->view('print_form',$q);
		$this->load->view('Template/Footer');
	}

	// public function getRenter()
	// {
	//
	// 	$this->load->view('Template/Header');
	// 	$this->load->view('Template/Sidebar');
	// 	$this->load->view('print_form';
	// 	$this->load->view('Template/Footer');
	//
	// }

}
?>
