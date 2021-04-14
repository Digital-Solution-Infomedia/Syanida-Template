<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentManagementModel extends CI_Model {

	public function save_template(string $jenis_template, string $campaign_name, string $template_content)
	{
		$this->db->insert('content_management', [
			'template_type' => $jenis_template
			, 'campaign_name' => $campaign_name
			, 'template_content' => $template_content
		]);
		return true;
	}
	

}

/* End of file contentManagementModel.php */
/* Location: ./application/models/contentManagementModel.php */