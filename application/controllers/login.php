<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		// $this->load->view('fontEnd/Template/Header');
		// $this->load->view('Template/front/sidebar');
		$this->load->view('index');
		// $this->load->view('fontEnd/Template/Footer');
	}
	public function Show_login_admin()
	{
		// $this->load->view('fontEnd/Template/Header');
		// $this->load->view('Template/front/sidebar');
		$this->load->view('loginAdmin');
		// $this->load->view('fontEnd/Template/Footer');
	}

	function login_admin()
	{

	$this->form_validation->set_rules('username','Username','required|alpha_numeric');
	$this->form_validation->set_rules('password','Password','required');

	if($this->form_validation->run()	==	FALSE)
	{

		$this->load->view('Template/Header');
		$this->load->view('Template/Sidebar');
		$this->load->view('Template/index');
		$this->load->view('Template/Footer');

	}
	else{
		$this->load->model('employees_model');
		$valid_user	= $this->employees_model->check_login();
		$check_user_is_active = $this->employees_model->check_user_is_active();

		if($valid_user	==	FALSE)
		{
			if ($check_user_is_active == FALSE)
			{
				$this->session->set_flashdata('error','ขออภัยชื่อเข้าใช้ / รหัสผ่าน ไม่ถูกต้อง!' );
			}else{
				$this->session->set_flashdata('error','ขอภัยไม่พบบัญชื่อผู้ใช้ในระบบ' );
			}

			redirect('login');
		}else{

			$this->session->set_userdata('username',$valid_user->Em_Username);
			$this->session->set_userdata('id',$valid_user->Em_Id);
			// $this->session->set_userdata('group',$valid_user->Em_Group);
			$this->session->set_userdata('name',$valid_user->Em_Name);

					redirect('dashboard');
		}//end if valid_user

	}//end if validation
}
function login_user()
{

$this->form_validation->set_rules('username','Username','required|alpha_numeric');
$this->form_validation->set_rules('password','Password','required');

if($this->form_validation->run()	==	FALSE)
{

	$this->load->view('Template/Header');
	$this->load->view('Template/Sidebar');
	$this->load->view('Template/index');
	$this->load->view('Template/Footer');

}
else{
	$this->load->model('renter_model');
	$valid_user	= $this->renter_model->check_login();
	$check_user_is_active = $this->renter_model->check_user_is_active();

	if($valid_user	==	FALSE)
	{
		if ($check_user_is_active == FALSE)
		{
			$this->session->set_flashdata('error','ขออภัยชื่อเข้าใช้ / รหัสผ่าน ไม่ถูกต้อง!' );
		}else{
			$this->session->set_flashdata('error','ขอภัยไม่พบบัญชื่อผู้ใช้ในระบบ' );
		}

		redirect('login');
	}else{

		$this->session->set_userdata('username',$valid_user->Re_Username);
		$this->session->set_userdata('id',$valid_user->Re_Id);
		// $this->session->set_userdata('group',$valid_user->Re_Group);
		$this->session->set_userdata('name',$valid_user->Re_Name);

				redirect('user/home/single_renter');
	}//end if valid_user

}//end if validation
}


  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }






}
