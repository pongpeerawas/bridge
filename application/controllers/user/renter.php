<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class renter extends CI_Controller {


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
			 redirect('user/renter/index?id='.$this->session->userdata('id'));
	 }


public function index()
{
  $id = $_GET['id'];
	$query = $this->renter_model->read_one($id);
	$value = array(
		'result' => array(
			'data' => $query
		),
		'views' => 'user/renterEdit'
	);
	$this->loadpage($value);
}

public function update()
{
	$update = $this->input->post();
	if (!empty($_FILES['Re_Pic']['name'])) {
	 $pathinfo = pathinfo($_FILES['Re_Pic']['name'],PATHINFO_EXTENSION);
	 $new_file = date('YmdHis').".".$pathinfo;

	 move_uploaded_file($_FILES['Re_Pic']['tmp_name'],"assetAdmin/img/".$new_file);
	$update['Re_Pic']=$new_file;
}
	$this->renter_model->update($update);
	redirect('user/renter/success');
}



	 function success(){

			 echo "<center><br>";
			 echo "<h1>แก้ไขเรียบร้อยแล้ว!</h1>";
			 echo"<meta http-equiv='Refresh'content = '3; URL = redirect'>";

	 }

		function redirect(){

			redirect('user/home/single_renter');


	 }



}
