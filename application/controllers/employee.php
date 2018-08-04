<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee extends CI_Controller {


	public function loadpage($value)
	{
		$this->load->view('Template/Header');
		$this->load->view('Template/Sidebar');
		$this->load->view($value['views'],$value['result']);
	   // $this->load->view('Template/footer');
	}
	public function index()
	{
		 $query = $this->employee_model->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'employee'
		);
		$this->loadpage($value);
	}



	public function history()
	{
		$read = $this->uri->segment(3);
		$query = $this->employee_model->read_one($read);
		// $product = $this->employee_model->read_category();
		$value = array(
			'result' => array(
				'data' => $query
				// 'product' => $product
			),
			'views' => 'history'
		);
		$this->loadpage($value);
	}

public function insertform()
{
	$department = $this->employee_model->read_department();

	$value = array(
		'result' => array(
			'department' => $department
		),
		'views' => 'employeeAdd'
	);
	$this->loadpage($value);
}

public function insert()
{
	$input = $this->input->post();
	$pathinfo = pathinfo($_FILES['Em_Pic']['name'],PATHINFO_EXTENSION);
	$new_file = date('YmdHis').".".$pathinfo;
	move_uploaded_file($_FILES['Em_Pic']['tmp_name'],"assetAdmin/img/".$new_file);

	$input['Em_Pic']=$new_file;
	$this->employee_model->insert($input);
	redirect('employee/success');

}


public function updateform()
{
	$read = $this->uri->segment(3);
	$query = $this->employee_model->read_one($read);
	$department = $this->employee_model->read_department();

	// $product = $this->employee_model->read_category();
	$value = array(
		'result' => array(
			'data' => $query,
			'department' => $department
		),
		'views' => 'employeeEdit'
	);
	$this->loadpage($value);
}



public function update()
{
	$update = $this->input->post();
	if (!empty($_FILES['Em_Pic']['name'])) {
	 $pathinfo = pathinfo($_FILES['Em_Pic']['name'],PATHINFO_EXTENSION);
	 $new_file = date('YmdHis').".".$pathinfo;

	 move_uploaded_file($_FILES['Em_Pic']['tmp_name'],"assetAdmin/img/".$new_file);
	$update['Em_Pic']=$new_file;
}
	$this->employee_model->update($update);
	redirect('employee/editsuccess');
}

public function del()
{
	$del = $this->uri->segment(3);
	$this->employee_model->del($del);
	redirect('employee/delsuccess');


}
public function  register_form()
{
	 // $this->load->view('Template/Header');
	// $this->load->view('Template/Sidebar');
	$this->load->view('register');
	 $this->load->view('Template/Footer');

}
public function register()
{

	$this->form_validation->set_rules('Em_Name','ชื่อ','required');
	$this->form_validation->set_rules('Em_Lastname','นามสกุล','required');


	if($this->form_validation->run()	==	FALSE)
	{
	  $this->load->view('Template/Header');
		$this->load->view('Template/Sidebar');
		$this->load->view('employeeAdd');
		$this->load->view('Template/Footer');


	}else{
				$data_employee = array
			 (
				'De_Id'			=> set_value('De_Id'),
				'Em_Idcard'			=> set_value('Em_Idcard'),
				'Em_Idcard_Detail'	=> set_value('Em_Idcard_Detail'),
				'Em_Salary'			=> set_value('Em_Salary'),
				'Em_Name'	=> set_value('Em_Name'),
				'Em_Lastname'			=> set_value('Em_Lastname'),
				'Em_Adress'			=> set_value('Em_Adress'),
				'Em_Birthday'	=> set_value('Em_Birthday'),
				'Em_Place_Birth'			=> set_value('Em_Place_Birth'),
				'Em_Education'			=> set_value('Em_Education'),
				'Em_Talent'	=> set_value('Em_Talent'),
				'Em_Place_Edu'			=> set_value('Em_Place_Edu'),
				'Em_Age'			=> set_value('Em_Age'),
				'Em_Phone'	=> set_value('Em_Phone'),
				'Em_Religion'			=> set_value('Em_Religion'),
				'Em_Position'			=> set_value('Em_Position'),
				'Em_Type'	=> set_value('Em_Type'),
				'Em_Nation'			=> set_value('Em_Nation'),
				'Em_Nation2'	=> set_value('Em_Nation2'),
				'Em_Status'			=> 'รออนุมัติ'


			 );
			 $pathinfo = pathinfo($_FILES['Em_Pic']['name'],PATHINFO_EXTENSION);
			 $new_file = date('YmdHis').".".$pathinfo;
			 move_uploaded_file($_FILES['Em_Pic']['tmp_name'],"assetAdmin/img/".$new_file);
			 $data_employee['Em_Pic']=$new_file;

			 if($this->employee_model->is_usr() == FALSE)
			 {
				 $this->employee_model->register($data_employee);
					 $this->form_validation->set_rules('Em_Name');
					 $this->form_validation->set_rules('Em_Lastname');
					 if($this->form_validation->run()	==	FALSE)
					 {
							$this->load->view('index');
					 }
			 }else{
					$this->session->set_flashdata('error','<div class="alert alert-warning"><strong>ผิดพลาด! มีรายชื่อลูกจ้างคนนี้อยู่แล้ว</strong></div>' );
					redirect('employee');
			 }
	}
}

	 function editsuccess(){

			 echo "<center><br>";
			 echo "<h1>ระบบทำการแก้ไขสำเร็จ!</h1>";
			 echo"<meta http-equiv='Refresh'content = '3; URL = redirect'>";

	 }

	 function success(){

			 echo "<center><br>";
			 echo "<h1>ลงทะเบียนเรียบร้อยแล้ว!</h1>";
			 echo"<meta http-equiv='Refresh'content = '3; URL = redirect'>";

	 }
	 function delsuccess(){

			 echo "<center><br>";
			 echo "<h1>ระบบทำการลบสำเร็จ !</h1>";
			 echo"<meta http-equiv='Refresh'content = '3; URL = redirect'>";

	 }
	 function redirect(){

	 	redirect('employee');


	 }
		// function redirect(){
	 //
		// 	redirect('user/home/single_employee');
	 //
	 //
	 // }



}
