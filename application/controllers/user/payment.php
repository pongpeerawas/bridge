<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends CI_Controller {

	public function loadpage($value)
	{
		$this->load->view('user/Template/Header');
		$this->load->view('user/Template/Sidebar');
		$this->load->view($value['views'],$value['result']);
			// $this->load->view('Template/footer');
	}

	public function single_payment()
	 {
				// $id =	 $this->session->userdata('name')
			 redirect('user/payment/index?id='.$this->session->userdata('id'));
	 }
	 	public function index()
	 	{

			  	$id = $_GET['id'];

				 		$data = $this->renter_model->get_contract($id);


			      $value = array(
			        'result' => array(
			          'ShowContract' => $data,

			        ),
			        'views' => 'user/payment'
			      );
			      $this->loadpage($value);


	 	}
		public function insert()
		{
			$input = $this->input->post();

			$pathinfo = pathinfo($_FILES['Pay_Pic']['name'],PATHINFO_EXTENSION);
			$new_file = date('YmdHis').".".$pathinfo;
			move_uploaded_file($_FILES['Pay_Pic']['tmp_name'],"assetAdmin/img/".$new_file);

			$input['Pay_Pic']=$new_file;
			 $this->payment_model->insert($input);




			redirect('user/payment/success');

		}
		function success(){

 			 echo "<center><br>";
 			 echo "<h1>แจ้งหลักฐานการชำระเงินเรียบร้อยแล้ว!</h1>";
 			 echo"<meta http-equiv='Refresh'content = '3; URL = redirect'>";

 	 }

 		function redirect(){

 			redirect('user/contract/single_contract');


 	 }

}
