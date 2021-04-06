<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SmartCollection extends CI_Controller {

	private $log_key,$log_temp,$title;
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Dashboard/SmartCollectionModel');
	}


	public function index()
	{
		$data = array(
			'title_page_big'		=> 'Dashboard Monitoring Smart Collection',
			'title'					=> $this->title,
			'total_order_by_channel' => $this->SmartCollectionModel->get_total_order_by_channel_and_status_today(),
			'total_order_by_regional' => $this->SmartCollectionModel->get_total_order_by_regional_and_status_today(),
			'summary_order' => $this->SmartCollectionModel->get_summary_order_today(),
			'summary_unique_customer' => $this->SmartCollectionModel->get_summary_unique_customer_today(),
			'summary_success_by_channel' => $this->SmartCollectionModel->get_summary_success_by_channel_today(),
			'summary_order_by_unique_customer' => $this->SmartCollectionModel->get_summary_order_by_unique_customer_today(),
		);
		$data['controller'] = $this;
		$curdate = date('Y-m-d');
		$getDateData = $this->SmartCollectionModel->get_date_data($curdate);
		$data['pencairan_h1'] = $this->SmartCollectionModel->get_total_pencairan_filter_by_date( date_format(date_sub(date_create( $getDateData[0]['date_value'] ), date_interval_create_from_date_string('1 days')),"Y-m-d") , $getDateData[0]['date_value']);
		$data['pencairan_seminggu'] = $this->SmartCollectionModel->get_total_pencairan_filter_by_date( date('Y-m-d', mktime(0, 0, 0, $getDateData[0]['month_number'], $getDateData[0]['is_first_day_in_week'], $getDateData[0]['year_4'])) , date('Y-m-d', mktime(0, 0, 0, $getDateData[0]['month_number'], $getDateData[0]['is_last_dat_in_week'], $getDateData[0]['year_4'])) );
		$data['pencairan_sebulan'] = $this->SmartCollectionModel->get_total_pencairan_filter_by_date( date('Y-m-01', strtotime($getDateData[0]['date_value'])), date('Y-m-t', strtotime($getDateData[0]['date_value'])) );

		$this->load->view('Dashboard/SmartCollection', $data);
		
	}

}

/* End of file smartCollection.php */
/* Location: ./application/controllers/smartCollection.php */