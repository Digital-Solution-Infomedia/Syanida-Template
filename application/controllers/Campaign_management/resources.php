<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resources extends CI_Controller {



	public function index()
	
	{	
		$this->load->view('temp_1/header');
		$this->load->view('Campaign_management/resource_page');
		$this->load->view('temp_1/footer');
	}
	

	
	
}
