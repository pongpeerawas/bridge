<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Pdf_report');
    $this->load->model('employees_model','room_model','renter_model','contract_model','payment_model');
  }
	public function index(){

    $q = $this->room_model->read_db_Report();
    $this->load->view('report/report_room',['data'=>$q]);

		}

    public function renter(){

      $q = $this->renter_model->read_db_Report();
      $this->load->view('report/report_renter',['data'=>$q]);

  		}
      public function contract(){

        $q = $this->contract_model->read_db_Report();
        $this->load->view('report/report_contract',['data'=>$q]);

        }

        public function payment(){
          $id = $this->uri->segment(3);
          $q = $this->contract_model->get_payment_report($id);
          // $q = $this->payment_model->read_db_Report();
          $this->load->view('report/report_payment',['data'=>$q]);

          }
          public function singgle_contract(){
            $id = $this->uri->segment(3);
            $q = $this->contract_model->read_one_Report($id);
            // $q = $this->payment_model->read_db_Report();
            $this->load->view('report/report_singgle_payment',['data'=>$q]);

            }


}
