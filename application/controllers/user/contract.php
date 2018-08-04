<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contract extends CI_Controller {


  	public function loadpage($value)
  	{
  		$this->load->view('user/Template/Header');
  		$this->load->view('user/Template/Sidebar');
  		$this->load->view($value['views'],$value['result']);
  	    // $this->load->view('Template/footer');
  	}

	 	public function index()
	 	{


    	$id = $_GET['id'];

	 		$data = $this->renter_model->get_contract($id);
      $data_renter = $this->renter_model->get_renter($id);

      $value = array(
        'result' => array(
          'ShowContract' => $data,
          'renter' => $data_renter,
        ),
        'views' => 'user/contract'
      );
      $this->loadpage($value);

	 	}
    public function single_contract()
     {
          // $id =	 $this->session->userdata('name')
         redirect('user/contract/index?id='.$this->session->userdata('id'));
     }
     public function ShowPayment()
     {

       $id = $this->uri->segment(4);

       $query = $this->contract_model->get_payment($id);
       $data['ShowPayment'] = $query->result();


       $this->load->view('user/Template/Header');
       $this->load->view('user/Template/Sidebar');
       $this->load->view('user/showPayment',$data);
       // $this->load->view('Template/Footer');

     }
}
