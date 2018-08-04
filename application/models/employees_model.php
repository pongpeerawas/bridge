<?php
class employees_model extends CI_Model
{


  // function customer(){
  //   return $q = $this->db->select('*')->from('customer')->get()->result();
  // }
  //
  // function getCustomer($id)
  // {
  //   $query = $this->db->get_where('customer',array('Cus_Id' => $id));
  //   return $query;
  // }
  //
  // public function update($update)
  // {
  //  $this->db
  //  ->where('Cus_Id',$update['Cus_Id'])
  //  ->update('customer',$update);
  // }
  //

  public function check_login()
  {
    $username = set_value('username');
    $password = set_value('password');
    // $stuts = '1';
    $gry = $this->db->where('Em_Username',$username)
    ->where('Em_Password',$password)
    // ->where('Cus_Status	',$stuts)
    // ->limit(1)
    ->get('employees');
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
    ->get('employees');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }


  }

  public function register($data_employees)
  {

    $this->db->insert('employees',$data_employees);
    // $this->db->insert('customer',$data_register);
  }

  public function is_usr()
  {
    $username = set_value('username');
    $gry = $this->db->where('Em_Username',$username)
    // ->limit(1)
    ->get('customer');
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
    ->get('customer');
    if($gry->num_rows()	>	0)
    {
      return $gry->row();
    }else{
      return array();
    }
  }





}
