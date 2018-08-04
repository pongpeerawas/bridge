<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment_model extends CI_Model {



public function insert($input)
{
 $this->db->insert('payment',$input);
}







}
