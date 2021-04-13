<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer_model extends CI_Model {
    private $_table = "trx_customer_kriteria";

    public $id;


    public function getAllCustomer()
    {
        return $this->db->get($this->_table)->result();
    }

    public function saveCustomer()
    {
        $id_paket = $this->maxPaket();
        $paket = count($this->input->post('paket'));

        for ($i=0; $i < $paket; $i++) { 
            $data_paket[$i] = array(
              'id' => $id_paket,
              'nama_paket' => $this->input->post('paket')[$i]  
            );
            $this->db->insert('trx_paket',$data_paket[$i]);
        }
        // $this->product_id = uniqid();
        // $data = json_decode(file_get_contents('php://input'), true);
        
        $data = array(
            'nama_kriteria' => $this->input->post("nama_kriteria"),
            'regional_key' => $this->input->post('regional'),
            'paket_key' => $id_paket,
            'channel_key' => $this->input->post("channel"),
            'moss_subs_notps' => $this->input->post('moss_subs_notps'),
            'last_campaign_time' => $this->input->post("last_campaign_time"),
            'history_campaign_topic' => $this->input->post("history_campaign_topic"),
            'layanan_key' => $this->input->post('layanan')
        );
        return $this->db->insert($this->_table, $data);
    }

    function maxPaket() {
        $this->db->select_max('id');
        $id_paket = $this->db->get('trx_paket')->row_array()['id'];
        $id_paket += 1;
        return $id_paket; 
    }

    public function getRegional(){
        return $this->db->get('dim_regional')->result();
    }

    public function getChannel(){
        return $this->db->get('dim_channel')->result();
    }

    public function getLayanan(){
        return $this->db->get('dim_layanan')->result();
    }
}