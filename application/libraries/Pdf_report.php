<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//sispkan file tcpdfnya  di sini
require_once dirname(__file__).'/TCPDF/tcpdf.php';
class Pdf_report extends TCPDF
  {
    protected $ci;

    public function __construct()
    {
      $this->ci =& get_instance();
    }

  }











 ?>
