<?php
const NOACCESS = 'No direct script access allowed';
defined('BASEPATH') || exit(NOACCESS);

class Content_Management extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ContentManagementModel');
	}

	// Halaman Index/Generator
	public function index()
	{
		// pake template Syanida nya
		$this->template->load('Content_management/index2');
	}

	public function blast_off() //**** UNTUK DI CRONJOB ****/
	{
		$data = $this->ContentManagementModel->get_blast_data();
		foreach ($data as $row) {
			$success = false;
			// echo $row->cust_id;
			// echo $row->media;
			// echo $row->content_id;
			// echo $row->unique_link;
			// echo $row->target;
			switch ($row->media) { //TODO tambah sistem blast
				case 'whatsapp':
					# Blast WA
					$content = $this->ContentManagementModel->unique_link_access('whatsapp', $row->unique_link);
					$success = true;
					break;
				case 'sms':
					# Blast sms
					$content = $this->ContentManagementModel->unique_link_access('sms', $row->unique_link);
					$success = true;
					break;
				case 'email':
					# Blast email
					$content = $this->ContentManagementModel->unique_link_access('email', $row->unique_link);
					$success = true;
					break;
				default:
					break;
			}
			if ($success) {
				$this->ContentManagementModel->update_blast_result($row->unique_link);
			}
		}
	}

	public function saveContent()
	{
		if ($this->input->is_ajax_request()) {
			$nama = $this->input->post('nama');
			$sms_template = $this->input->post('sms_template');
			$email_template = $this->input->post('email_template');
			$landingpage_template = $this->input->post('landingpage_template');
			$filter_parameter = $this->input->post('filter_parameter');
			$tipe_content = $this->input->post('tipe_content');
			$starttime = $this->input->post('starttime');
			$endtime = $this->input->post('endtime');
			$content_id = $this->ContentManagementModel->saveContent($nama, $sms_template, $email_template, $landingpage_template, $tipe_content, $starttime, $endtime);
			$this->ContentManagementModel->insert_cust_blast($content_id, $filter_parameter); //generate blast data

			// $hasil = array('response' => 'success', 'results' => $this->ContentManagementModel->getTemplateData($template_id));
			// echo json_encode($hasil);
		} else {
			echo NOACCESS;
		}
	}

	public function getTypeTemplate()
	{
		if ($this->input->is_ajax_request()) {
			$hasil = array('response' => 'success', 'results' => $this->ContentManagementModel->getTypeTemplate());
			echo json_encode($hasil);
		} else {
			echo NOACCESS;
		}
	}

	public function getTemplateData()
	{
		if ($this->input->is_ajax_request()) {
			$template_id = $this->input->post('template_id');
			$hasil = array('response' => 'success', 'results' => $this->ContentManagementModel->getTemplateData($template_id));
			echo json_encode($hasil);
		} else {
			echo NOACCESS;
		}
	}

	public function LandingPage()
	{
		$unique_link = $this->input->get('unique_link', TRUE);
		$data['customized_view'] = $this->ContentManagementModel->unique_link_access('landingpage', $unique_link);
		// $this->ContentManagementModel->clear_blast_link($unique_link); //Clear unique link 
		$this->template->load('Content_management/LandingPage', $data);
	}

	public function getFieldData()
	{
		if ($this->input->is_ajax_request()) {
			$selected_field = $this->input->post('selectedField');
			$hasil = array('response' => 'success', 'results' => '[{"id":"1","text":"Parameter 1"},{"id":"2","text":"Parameter 2"},{"id":"3","text":"Parameter 3"}]');
			echo json_encode($hasil);
		} else {
			echo NOACCESS;
		}
	}

	public function calculatePotentialTarget()
	{
		if ($this->input->is_ajax_request()) {
			$filter_parameter = $this->input->post('filter_parameter');
			$hasil = array('response' => 'success', 'results' => '');
			echo json_encode($hasil);
		} else {
			echo NOACCESS;
		}
	}
}

/* End of file content_Management.php */
/* Location: ./application/controllers/content_Management.php */