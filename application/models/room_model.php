<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class room_model extends CI_Model {


  public function read_db()
  {
  	$db = $this->db->get('room')->result_array();
  	return $db;
  }
  public function read_db_Report()
  {
  	$db = $this->db->get('room')->result();
  	return $db;
  }
  public function read_one($read)
  {
  	$query = $this->db
  	->where('Room_Id',$read)
  	->get('room')
  	->result_array();
  	return $query;
  }
public function insert($input)
{
 $this->db->insert('room',$input);
}
public function update($update)
{
 $this->db
 ->where('Room_Id',$update['Room_Id'])
 ->update('room',$update);
}

public function del($del)
{
	$this->db->where('Room_Id',$del)
	->delete('room');
}


}
