<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class room extends CI_Controller {

		// public function __construct ()
		// 	{
		// 		parent::__construct();
		// 		if($this->session->userdata('group')!=	('1') )
		// 		{
		// 			$this->session->set_flashdata('error','ไม่ได้กินฉันหรอก');
		// 			redirect('fontEnd/Login');
		// 		}
    //
		// 	}
	public function loadpage($value)
	{
		$this->load->view('Template/header');
		$this->load->view('Template/sidebar');
		$this->load->view($value['views'],$value['result']);
		$this->load->view('Template/footer');
	}
	public function index()
	{
		 $query = $this->room_model->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'room'
		);
		$this->loadpage($value);
	}

	public function insert()
	{
		$input = $this->input->post();
		$this->room_model->insert($input);
		redirect('room');
		//print_r($value);
	}
	public function updateform()
	{
		$read = $this->uri->segment(3);
		$query = $this->room_model->read_one($read);

		$value = array(
			'result' => array(
				'data' => $query,
			),
			'views' => 'roomEdit'
		);
		$this->loadpage($value);
	}

	public function update()
	{
		$update = $this->input->post();
		$this->room_model->update($update);

		redirect('room/success');

	}

public function del()
{
	$del = $this->uri->segment(3);
	$this->room_model->del($del);
	redirect('room');


}

	 function success(){

			 echo "<center><br>";
			 echo "<h1>แก้ไขข้อมูลเรียบร้อยแล้ว!</h1>";
			 echo"<meta http-equiv='Refresh'content = '3; URL = redirect'>";

	 }

		function redirect(){

			redirect('room');


	 }



}
