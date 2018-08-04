<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function loadpage($value)
	{
		$this->load->view('user/Template/Header');
		$this->load->view('user/Template/Sidebar');
		$this->load->view($value['views'],$value['result']);
	   // $this->load->view('Template/footer');
	}
	public function single_renter()
	 {
				// $id =	 $this->session->userdata('name')
			 redirect('user/home/index?id='.$this->session->userdata('id'));
	 }


public function index()
{
  $id = $_GET['id'];
	$query = $this->renter_model->read_one($id);
	$value = array(
		'result' => array(
			'data' => $query
		),
		'views' => 'user/home'
	);
	$this->loadpage($value);
}


}
