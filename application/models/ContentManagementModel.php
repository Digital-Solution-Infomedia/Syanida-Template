<?php
defined('BASEPATH') || exit('No direct script access allowed');

class ContentManagementModel extends CI_Model
{
	public function save_template(string $jenis_template, string $campaign_name, string $template_content)
	{
		$this->db->insert('content_management', [
			'template_type' => $jenis_template, 'campaign_name' => $campaign_name, 'template_content' => $template_content
		]);
		return true;
	}
	public function saveContent($nama, $sms_template, $email_template, $landingpage_template, $tipe_content, $starttime, $endtime = null)
	{
		$design_data = array('sms' => $sms_template, 'email' => $email_template, 'landingpage' => $landingpage_template);
		$data = array(
			'nama' => $nama,
			'tipe_content' => $tipe_content,
			'design_data' => json_encode($design_data),
			'starttime' => $starttime,
			'endtime' => $endtime,
			'active' => '0'
		);
		$this->db->insert('content_campaign', $data);  //TODO gimana kalo bukan tambah baru, tapi update
		return $this->db->insert_id();
	}
	public function get_blast_data() // get data yg mau di blast dari DB
	{
		return $this->db->query("SELECT JSON_UNQUOTE(JSON_EXTRACT(JSON_EXTRACT(stage_data, CONCAT('$[',stage_flag+1,']')),'$.media')) AS media,cust_id,content_id,unique_link,JSON_UNQUOTE(JSON_EXTRACT(JSON_EXTRACT(stage_data, CONCAT('$[',stage_flag+1,']')),'$.target')) AS target FROM content_customer_blast WHERE unique_link IS NOT NULL AND FROM_UNIXTIME(JSON_EXTRACT(JSON_EXTRACT(stage_data, CONCAT('$[',stage_flag+1,']')),'$.schedule')) <= NOW() LIMIT 1;")->result();
	}
	public function get_not_responding_data() //Ambil data blast yg sudah selesai di blast, tapi tanpa respon, untuk di konsumsi TAM
	{
		return $this->db->query("SELECT cust_id,content_id,unique_link FROM content_customer_blast WHERE unique_link IS NOT NULL AND JSON_EXTRACT(stage_data, CONCAT('$[',stage_flag+1,']')) IS NULL;")->result();
	}
	public function update_blast_result(string $unique_link) //Bilamana blast sukses dieksekusi (bukan blast agree)
	{
		return $this->db->query("UPDATE content_customer_blast SET stage_flag = stage_flag + 1 WHERE unique_link = " . $unique_link . ";");
	}
	public function clear_blast_link(string $unique_link) //Final Function, kalau pelanggan agree, disagree, tidak ada respon sama sekali, hentikan blast
	{
		return $this->db->query("UPDATE content_customer_blast SET unique_link = NULL WHERE unique_link = " . $unique_link . ";");
	}
	public function unique_link_access(string $media, string $unique_link) //Ambil data berdasarkan unique link
	{
		return $this->db->query('SELECT JSON_UNQUOTE(JSON_EXTRACT(design_data, "$.' . $media . '")) AS ' . $media . ' FROM content_campaign WHERE id=(SELECT content_id FROM content_customer_blast WHERE unique_link = "' . $unique_link . '")')->result()[0]->$media;
	}
	public function insert_cust_blast($content_id, $parameter)
	{
		$sql = 'INSERT INTO content_customer_blast (cust_id,stage_data,unique_link,content_id) SELECT cust_id,CONCAT("[",IF(email IS NOT NULL,CONCAT(\'{"media":"email","target":"\',email,\'","schedule":\',UNIX_TIMESTAMP(DATE_ADD(NOW(), INTERVAL 0 DAY)),\'}\'),""),IF(LENGTH(SUBSTRING(ani,LOCATE("8",ani),LENGTH(ani)-LOCATE("8",ani)+1))>10 , CONCAT(IF(email IS NOT NULL,",",""),\'{"media":"sms","target":"\',ani,\'","schedule":\',UNIX_TIMESTAMP(DATE_ADD(NOW(), INTERVAL 3 DAY)),\'},{"media":"whatsapp","target":"\',ani,\'","schedule":\',UNIX_TIMESTAMP(DATE_ADD(NOW(), INTERVAL 6 DAY)),\'}\'), ""),"]") AS stage_data, SHA2(CONCAT(cust_id,' . $content_id . '), 512) AS unique_link,' . $content_id . ' AS content_id FROM (';
		$sql .= 'SELECT no_speedy AS cust_id,handphone AS ani,email FROM trans_profiling WHERE true AND';
		foreach ($parameter as $key => $value) {
			$sql .= ' ' . $key . ' IN (';
			foreach ($value as $val) {
				$sql .= '"' . $val . '",';
			}
			$sql = substr($sql, 0, -1);
			$sql .= ') AND';
		}
		$sql = substr($sql, 0, -4);
		$sql .= ') temp';
		return $this->db->query($sql);
	}
	public function getTypeTemplate()
	{
		return $this->db->query("SELECT id,nama AS text FROM content_type_template")->result();
	}
	public function getTemplateData($id, string $target = null)
	{
		if ($target === null) {
			return $this->db->query('SELECT JSON_UNQUOTE(JSON_EXTRACT(template, "$.sms")) AS sms,JSON_UNQUOTE(JSON_EXTRACT(template, "$.whatsapp")) AS whatsapp,JSON_UNQUOTE(JSON_EXTRACT(template, "$.email")) AS email,JSON_UNQUOTE(JSON_EXTRACT(template, "$.landingpage")) AS landingpage FROM content_type_template WHERE id = ' . $id . ';')->result()[0];
		} else {
			return $this->db->query('SELECT JSON_UNQUOTE(JSON_EXTRACT(template, "$.' . $target . '")) AS ' . $target . ' FROM content_type_template WHERE id = ' . $id . ';')->result()[0];
		}
	}
	public function getFieldData($selected_field)
	{
		return $this->db->query('SELECT DISTINCT ' . $selected_field . ' AS result FROM trans_profiling;')->result();
	}
	public function calculatePotentialTarget($parameter)
	{
		$sql = "SELECT COUNT(*) AS total,SUM(CASE WHEN email!='' THEN 1 ELSE 0 END) AS email,SUM(CASE WHEN handphone!='' THEN 1 ELSE 0 END) AS handphone FROM trans_profiling WHERE true AND";
		foreach ($parameter as $key => $value) {
			$sql .= ' ' . $key . ' IN (';
			foreach ($value as $val) {
				$sql .= '"' . $val . '",';
			}
			$sql = substr($sql, 0, -1);
			$sql .= ') AND';
		}
		$sql = substr($sql, 0, -4);
		return $this->db->query($sql)->result()[0];
		// return $sql;
	}
}

/* End of file contentManagementModel.php */
/* Location: ./application/models/contentManagementModel.php */