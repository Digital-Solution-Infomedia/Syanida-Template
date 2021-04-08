<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {
    private $_table = "r_product";

    public $id;
    public $code_product;
    public $name_product;
    public $price;
    public $product_desc;

    public function rules()
    {
        return [
            ['field' => 'code_product',
            'label' => 'Code Product',
            'rules' => 'required'],

            ['field' => 'name_product',
            'label' => 'Name Product',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'product_desc',
            'label' => 'Product Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->product_id = uniqid();
        $this->code_product = $post["code_product"];
        $this->name_product = $post["name_product"];
        $this->price = $post["price"];
        $this->product_desc = $post["product_desc"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->code_product = $post["code_product"];
        $this->name_product = $post["name_product"];
        $this->price = $post["price"];
        $this->product_desc = $post["product_desc"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}