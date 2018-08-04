<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee_model extends CI_Model {


public function read_db()
{
	$this->db->join('department','employee.De_Id = department.De_Id','left');
	$db = $this->db->get('employee')->result_array();
	return $db;
}

public function read_department()
{
	$db = $this->db
	->get('department')
	->result_array();
	return $db;
}

public function read_db_Report()
{
	$this->db->join('room','employee.Room_Id = room.Room_Id','left');
	$db = $this->db->get('employee')->result();
	return $db;
}

public function insert($input)
{
 $this->db->insert('employee',$input);
}

public function del($del)
{
	$this->db->where('Em_Id',$del)
	->delete('employee');
}


public function read_one($id)
{
	$query = $this->db
	->where('Em_Id',$id)
	->join('department','employee.De_Id = department.De_Id','left')
	->get('employee')
	->result_array();
	return $query;
}
public function update($update)
{
 $this->db
 ->where('Em_Id',$update['Em_Id'])
 ->update('employee',$update);
}


  public function check_login()
  {
    $username = set_value('username');
    $password = set_value('password');
    // $stuts = '1';
    $gry = $this->db->where('Em_Username',$username)
    ->where('Em_Password',$password)
    // ->where('Cus_Status	',$stuts)
    // ->limit(1)
    ->get('employee');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }


  }//end check_usr function

  public function check_user_is_active()
  {
    //if the user try to login and his account is not acctive
    $username = set_value('username');
    $password = set_value('password');
    // $stuts = '0';
    $gry = $this->db->where('Em_Username',$username)
    ->where('Em_Password',$password)
    // ->where('Cus_Status',$stuts)
    // ->limit(1)
    ->get('employee');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }


  }

  public function register($data_employee)
  {

    $this->db->insert('employee',$data_employee);
    // $this->db->insert('customer',$data_register);
  }

  public function is_usr()
  {
    $username = set_value('Em_Name');
    $gry = $this->db->where('Em_Name',$username)
    // ->limit(1)
    ->get('employee');
    if($gry->num_rows()	>	0)
    {
      return TRUE;
    }else{
      return FALSE;
    }


  }

  public function check()
  {
    $username = set_value('username');
    $password = set_value('password');
    // $stuts = '1';
    $gry = $this->db->where('Em_Username',$username)
    ->where('Em_Password',$password)
    // ->where('Cus_Status',$stuts)
    // ->limit(1)
    ->get('employee');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }
  }

	public function get_contract($id)
	{
		$this->db->select('*');
		$this->db->from('contract');
		$this->db->where('Em_Id',$id);
		$this->db->join('room', 'contract.Room_Id = room.Room_Id');
		$db = $this->db->get()->result_array();
	 return $db;

	}
	public function get_employee($id)
	{
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->where('Em_Id',$id);
		$this->db->join('room', 'employee.Room_Id = room.Room_Id');
		$db = $this->db->get()->result_array();
	 return $db;

	}

}
