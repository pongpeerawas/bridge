<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hire_model extends CI_Model {


  public function read_db()
  {
    $this->db->select('*');
    $this->db->from('hire');
    $this->db->join('employee', 'hire.Em_Id = employee.Em_Id');
    $this->db->join('department', 'employee.De_Id = department.De_Id');
    // $this->db->join('hire_time', 'hire.Hiretime_Id = hire_time.Hiretime_Id');
    $db = $this->db->get()->result_array();
    return $db;
    // $this->db->select('*');
    // $this->db->from('hire');
    // $this->db->join('employee', 'hire.Re_Id = employee.Re_Id');
    // $this->db->join('room', 'hire.Room_Id = room.Room_Id');
    // $db = $this->db->get()->result_array();
  	// return $db;
  }
  public function read_db_Report()
  {

    $this->db->select('*');
    $this->db->from('hire');
    $this->db->join('employee', 'hire.Re_Id = employee.Re_Id');
    $this->db->join('room', 'hire.Room_Id = room.Room_Id');
    $db = $this->db->get()->result();
    return $db;
  }
  public function read_one($read)
  {
    $this->db->select('*');
    $this->db->from('hire');
    $this->db->where('Hire_Id',$read);
    $this->db->join('employee', 'hire.Re_Id = employee.Re_Id');
    $this->db->join('room', 'hire.Room_Id = room.Room_Id');
    $db = $this->db->get()->result_array();
    return $db;

  	// $query = $this->db
  	// ->where('Hire_Id',$read)
  	// ->get('hire')
  	// ->result_array();
  	// return $query;
  }

  public function read_employee()
  {
    $where = "Em_Status != 'ลูกจ้าง'";
    $db =$this->db->where($where);
    $db = $this->db->get('employee')->result_array();

  	return $db;
  }
  public function read_department()
  {

    $db = $this->db->get('room')->result_array();
    // $db = 	$this->db->where('Cus_Group != 1');
    return $db;
    //
  	// $db = $this->db
  	// ->get('room')
  	// ->result_array();
  	// return $db;
  }

public function insert($input)
{
 $this->db->insert('hire',$input);
}
public function update($update)
{
 $this->db
 ->where('Hire_Id',$update['Hire_Id'])
 ->update('hire',$update);
}

public function del($del)
{
	$this->db->where('Hire_Id',$del)
	->delete('hire');
}


public function get_payment($id)
{
      $query = $this->db->select('*')->from('payment')->where('Hire_Id',$id)->get();
    return $query;

}
public function get_payment_report($id)
{
      $db = $this->db->select('*')->from('payment')->where('Hire_Id',$id)->get()->result();
    return $db;

}
public function read_one_Report($id)
{
  $this->db->select('*');
  $this->db->from('hire');
  $this->db->where('Hire_Id',$id);
  $this->db->join('employee', 'hire.Re_Id = employee.Re_Id');
  $this->db->join('room', 'hire.Room_Id = room.Room_Id');
  $db = $this->db->get()->result();
  return $db;
  //
  // $query = $this->db
  // ->where('Hire_Id',$id)
  // ->get('hire')
  // ->result();
  // return $query;
}


}
