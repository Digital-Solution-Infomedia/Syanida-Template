<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index()
	
	{	
		// $this->load->view('temp_1/header');
		$this->load->view('Dashboard/dashboard_page');
		// $this->load->view('temp_1/footer');
	}
	

	
	
}