<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_management extends CI_Controller {



	public function index()
	
	{
		$data = array();
	

		$this->template->load('Content_management/Content_management',$data);
		
	}

	

	
	
}
