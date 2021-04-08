<?php
defined('BASEPATH') or exit('No direct script access allowed');

class resources extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Product/Product_model', 'product_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["products"] = $this->product_model->getAll();
		$data["success"] = $this->session->flashdata('success');
		$this->template->load('Campaign_management/resource_page', $data);
	}

	function get_resource_product($id)
	{
		$data["products"] = $this->product_model->getAll();
		$data['detail_product'] = $this->product_model->getById($id);
		$this->template->load('Campaign_management/resource_page', $data);
	}

	function simpan_resource_product()
	{
		$product = $this->product_model;
		$validation = $this->form_validation;

		$post = $this->input->post();
		// $this->product_id = uniqid();
		$id = $post["id"];

		$validation->set_rules($product->rules());

		if ($validation->run() === TRUE) {
			if ($id == "") {
				$product->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
			} else {
				$product->update();
				$this->session->set_flashdata('success', 'Berhasil diupdate');
			}
		}
		$this->index();
	}
}
