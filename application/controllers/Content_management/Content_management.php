<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_Management extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ContentManagementModel');
	}

	// Halaman Index/Generator
	public function index()
	{
		// pake template Syanida nya
		$this->template->load('Content_management/index');
	}

	// Save Generator Data
	// Save Generator Email
	public function save_email_template()
	{
		/*var_dump ($this->input->post('nama_campaign'));
		var_dump ($this->input->post('content'));
		var_dump ($this->input->post('campaign_image'));
		var_dump ($this->input->post('button_for_link'));
		die();*/
		// Pasang Form Validation
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_campaign', 'Nama Campaign', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		// Check kalo files dikirim ga, kalo ga dikirim bikin rules agar ada report errornya
		if (empty($_FILES['campaign_image']['name']))
		{
			$this->form_validation->set_rules('campaign_image', 'Campaign Image', 'required');
		}

		$this->form_validation->set_rules('button_for_link', 'Link for Button', 'required');

		// Check Validation dari Form
		if ($this->form_validation->run() == FALSE)
		{
			// Kembalikan ke View Index
			echo validation_errors('<span class="error">', '</span>');
			// Harusnya kasih variabel Error disini
			redirect('/Content_Management/Content_Management/index#error_on_form', 'refresh');
		}
		else
		{			
			// Upload Gambar Campaign
			// Ambil file name dan simpan di variabel
			$new_name = time().'email_'.$this->input->post('nama_campaign').'_'.$_FILES["campaign_image"]['name'];
			// File Path
			$file_path = 'uploads/campaign_image/';
			// Load library Upload
			$config['upload_path'] = './'.$file_path;
			$config['allowed_types'] = 'jpg';
			$config['file_name'] = $new_name;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('campaign_image'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error);

				// $this->load->view('upload_form', $error);
				redirect('/Content_Management/Content_Management/index#error_on_uploading_image', 'refresh');
			}

			$template_content[] = ['content' => $this->input->post('content')];
			$template_content[] = ['campaign_image' => $file_path.$new_name.'.jpg'];
			$template_content[] = ['button_for_link' => $this->input->post('button_for_link')];
			// Bungkus sebagai JSON untuk Template Content
			// panggil fungsi untuk save data
			$this->ContentManagementModel->save_template('email', $this->input->post('nama_campaign'), json_encode($template_content));
			redirect('/Content_Management/Content_Management/index#success', 'refresh');
		}
	}

	// Save Generator Whatsapp
	public function save_whatsapp_template()
	{
		/*var_dump ($this->input->post('nama_campaign'));
		var_dump ($this->input->post('content'));
		var_dump ($this->input->post('campaign_image'));
		die();*/
		// Pasang Form Validation
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_campaign', 'Nama Campaign', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		// Check kalo files dikirim ga, kalo ga dikirim bikin rules agar ada report errornya
		if (empty($_FILES['campaign_image']['name']))
		{
			$this->form_validation->set_rules('campaign_image', 'Campaign Image', 'required');
		}


		// Check Validation dari Form
		if ($this->form_validation->run() == FALSE)
		{
			// Kembalikan ke View Index
			echo validation_errors('<span class="error">', '</span>');
			// Harusnya kasih variabel Error disini
			redirect('/Content_Management/Content_Management/index#error_on_form', 'refresh');
		}
		else
		{			
			// Upload Gambar Campaign
			// Ambil file name dan simpan di variabel
			$new_name = time().'whatsapp_'.$this->input->post('nama_campaign').'_'.$_FILES["campaign_image"]['name'];
			// File Path
			$file_path = 'uploads/campaign_image/';
			// Load library Upload
			$config['upload_path'] = './'.$file_path;
			$config['allowed_types'] = 'jpg';
			$config['file_name'] = $new_name;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('campaign_image'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error);

				// $this->load->view('upload_form', $error);
				redirect('/Content_Management/Content_Management/index#error_on_uploading_image', 'refresh');
			}

			$template_content[] = ['content' => $this->input->post('content')];
			$template_content[] = ['campaign_image' => $file_path.$new_name.'.jpg'];
			// Bungkus sebagai JSON untuk Template Content
			// panggil fungsi untuk save data
			$this->ContentManagementModel->save_template('whatsapp', $this->input->post('nama_campaign'), json_encode($template_content));
			redirect('/Content_Management/Content_Management/index#success', 'refresh');
		}
	}

	// Save Generator SMS
	public function save_sms_template()
	{
		/*var_dump ($this->input->post('nama_campaign'));
		var_dump ($this->input->post('content'));
		die();*/
		// Pasang Form Validation
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_campaign', 'Nama Campaign', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');

		// Check Validation dari Form
		if ($this->form_validation->run() == FALSE)
		{
			// Kembalikan ke View Index
			// Harusnya kasih variabel Error disini
			redirect('/Content_Management/Content_Management/index#error_on_form', 'refresh');
		}
		else
		{
			$template_content[] = ['content' => $this->input->post('content')];
			// Bungkus sebagai JSON untuk Template Content
			// panggil fungsi untuk save data
			$this->ContentManagementModel->save_template('sms', $this->input->post('nama_campaign'), json_encode($template_content));
			redirect('/Content_Management/Content_Management/index#success', 'refresh');
		}
	}

}

/* End of file content_Management.php */
/* Location: ./application/controllers/content_Management.php */