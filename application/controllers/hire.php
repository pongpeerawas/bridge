<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hire extends CI_Controller {


	public function loadpage($value)
	{
		$this->load->view('Template/Header');
		$this->load->view('Template/Sidebar');
		$this->load->view($value['views'],$value['result']);
	    // $this->load->view('Template/footer');
	}
	public function index()

{
		 $query = $this->hire_model->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'hire'
		);
		$this->loadpage($value);

	}
	public function discard()

{
		 $query = $this->hire_model->read_db();

		$value = array(
			'result' => array(
				'data' => $query
			),
			'views' => 'discard'
		);
		$this->loadpage($value);

	}


public function insertform()
{
  $employee = $this->hire_model->read_employee();
  // $room = $this->hire_model->read_room();

  $value = array(
    'result' => array(
      // 'room' => $room,
      'employee' => $employee
    ),
    'views' => 'hireAdd'
  );
	$this->loadpage($value);
}

public function insert()
{
  $input = $this->input->post();
	$pathinfo = pathinfo($_FILES['Hire_Pic']['name'],PATHINFO_EXTENSION);
	$new_file = date('YmdHis').".".$pathinfo;
	move_uploaded_file($_FILES['Hire_Pic']['tmp_name'],"assetAdmin/img/".$new_file);
	$input['Hire_Pic']=$new_file;
	$this->hire_model->insert($input);


	$updatestatus = array
	(
			'Em_Id'  =>    set_value('Em_Id'),
			'Em_Status' 	=>  "ลูกจ้าง",
	);
	$this->db->where('Em_Id',$updatestatus['Em_Id'])->update('employee',$updatestatus);

	redirect('hire/success');

}

public function updateform()
{
	$read = $this->uri->segment(3);
	$query = $this->hire_model->read_one($read);
	 $employee = $this->hire_model->read_employee();
   $room = $this->hire_model->read_room();

	$value = array(
		'result' => array(
			'data' => $query,
			'employee' => $employee,
      'room' => $room
		),
		'views' => 'hireEdit'
	);
	$this->loadpage($value);
}



public function update()
{
	// $update = $this->input->post();

  $updatehire = array
  (   'Con_Id'=>    set_value('Con_Id'),
      'Con_Date'=>    set_value('Con_Date'),
      'Con_Cash'=>    set_value('Con_Cash'),
      'Re_Id' =>    set_value('Re_Id'),
      'Room_Id'  =>    set_value('Room_Id'),

  );
	$this->hire_model->update($updatehire);
  // $this->db->where('Con_Id',$update['Con_Id'])->update('hire',$update);

	  $updatedata2 = array
	  (
	      'Room_Id'  =>  $this->input->post('Room_Id2'),
	      'Room_Status' 	  =>   'ว่าง',

	  );
	  $this->db->where('Room_Id',$updatedata2['Room_Id'])->update('room',$updatedata2);

  $updatedata = array
  (
      'Room_Id'  =>    set_value('Room_Id'),
      'Room_Status' 	  =>   'ไม่ว่าง',

  );
  $this->db->where('Room_Id',$updatedata['Room_Id'])->update('room',$updatedata);

	$updateemployee = array
	(
			'Re_Id'  =>    set_value('Re_Id'),
			'Room_Id' 	=>   $this->input->post('Room_Id'),
	);
	$this->db->where('Re_Id',$updateemployee['Re_Id'])->update('employee',$updateemployee);

	redirect('hire/success');
}

public function del()
{
	$del = $this->uri->segment(3);
	$this->hire_model->del($del);
	redirect('hire');


}

	 function success(){

			 echo "<center><br>";
			 echo "<h1>ทำสัญญาเรียบร้อยแล้ว!</h1>";
			 echo"<meta http-equiv='Refresh'content = '3; URL = redirect'>";

	 }

		function redirect(){

			redirect('hire/index');


	 }


	 	public function ShowPayment()
	 	{

	 		$id = $this->uri->segment(3);

	 		$query = $this->hire_model->get_payment($id);
	 		$data['ShowPayment'] = $query->result();


	 		$this->load->view('Template/Header');
	 		$this->load->view('Template/Sidebar');
	 		$this->load->view('ShowPayment',$data);
	 		// $this->load->view('Template/Footer');

	 	}


}
