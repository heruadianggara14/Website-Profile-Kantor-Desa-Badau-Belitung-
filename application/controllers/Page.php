<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

  public function welcome(){
    	$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/templates/footer');
  }
}