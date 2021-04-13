<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blast_management extends CI_Controller {



	public function index()
	
	{
		$data = array();
	

		$this->template->load('Blast_management/Blast_management',$data);
		
	}

	public function get_tot_prospect(){
		$tot = $this->db->query("SELECT COUNT(*) as jml FROM trx_blast WHERE status is null")->row()->jml;
		return $tot;
	}
	public function get_perchannelblast(){
		$tot['wa'] = $this->db->query("SELECT
		channel_key,
		( SELECT count(*) FROM trx_blast WHERE tgl_deliver IS NOT NULL AND channel_key=1) AS jmldeliver,
		( SELECT count(*) FROM trx_blast WHERE tgl_klicked IS NOT NULL AND channel_key=1) AS jml_klicked,
		( SELECT count(*) FROM trx_blast WHERE tgl_read IS NOT NULL AND channel_key=1) AS tgl_read,
		( SELECT count(*) FROM trx_blast WHERE tgl_activated IS NOT NULL AND channel_key=1) AS tgl_activated,
		( SELECT count(*) FROM trx_blast WHERE tgl_ps IS NOT NULL AND channel_key=1) AS tgl_ps,
		( SELECT count(*) FROM trx_blast WHERE tgl_blast IS NOT NULL AND channel_key=1 ) AS tgl_blast,
		count(*) AS tot 
	FROM
		trx_blast 
	WHERE
	STATUS IS NULL AND channel_key=1
	GROUP BY
		channel_key")->row();
		$tot['sms'] = $this->db->query("SELECT
		channel_key,
		( SELECT count(*) FROM trx_blast WHERE tgl_deliver IS NOT NULL   AND channel_key=2) AS jmldeliver,
		( SELECT count(*) FROM trx_blast WHERE tgl_klicked IS NOT NULL  AND channel_key=2) AS jml_klicked,
		( SELECT count(*) FROM trx_blast WHERE tgl_read IS NOT NULL  AND channel_key=2) AS tgl_read,
		( SELECT count(*) FROM trx_blast WHERE tgl_activated IS NOT NULL  AND channel_key=2) AS tgl_activated,
		( SELECT count(*) FROM trx_blast WHERE tgl_ps IS NOT NULL  AND channel_key=2) AS tgl_ps,
		( SELECT count(*) FROM trx_blast WHERE tgl_blast IS NOT NULL  AND channel_key=2) AS tgl_blast,
		count(*) AS tot 
	FROM
		trx_blast 
	WHERE
	STATUS IS NULL AND channel_key=2
	GROUP BY
		channel_key")->row();
		$tot['email'] = $this->db->query("SELECT
		channel_key,
		( SELECT count(*) FROM trx_blast WHERE tgl_deliver IS NOT NULL AND channel_key=3) AS jmldeliver,
		( SELECT count(*) FROM trx_blast WHERE tgl_klicked IS NOT NULL  AND channel_key=3 ) AS jml_klicked,
		( SELECT count(*) FROM trx_blast WHERE tgl_read IS NOT NULL  AND channel_key=3) AS tgl_read,
		( SELECT count(*) FROM trx_blast WHERE tgl_activated IS NOT NULL AND channel_key=3 ) AS tgl_activated,
		( SELECT count(*) FROM trx_blast WHERE tgl_ps IS NOT NULL AND channel_key=3) AS tgl_ps,
		( SELECT count(*) FROM trx_blast WHERE tgl_blast IS NOT NULL  AND channel_key=3) AS tgl_blast,
		count(*) AS tot 
	FROM
		trx_blast 
	WHERE
	STATUS IS NULL AND channel_key=3
	GROUP BY
		channel_key")->row();
		$tot['total'] = $this->db->query("SELECT
		channel_key,
		( SELECT count(*) FROM trx_blast WHERE tgl_deliver IS NOT NULL  ) AS jmldeliver,
		( SELECT count(*) FROM trx_blast WHERE tgl_klicked IS NOT NULL  ) AS jml_klicked,
		( SELECT count(*) FROM trx_blast WHERE tgl_read IS NOT NULL   ) AS tgl_read,
		( SELECT count(*) FROM trx_blast WHERE tgl_activated IS NOT NULL ) AS tgl_activated,
		( SELECT count(*) FROM trx_blast WHERE tgl_ps IS NOT NULL   ) AS tgl_ps,
		( SELECT count(*) FROM trx_blast WHERE tgl_blast IS NOT NULL) AS tgl_blast,
		count(*) AS tot 
	FROM
		trx_blast 
	WHERE
	STATUS IS NULL")->row();
		return $tot;
	}

	public function get_jml_prdct_prospect(){
		$tot = $this->db->query("SELECT
		trx_rule.product_key as product,
		dim_produk.produk_value,
		count(*) as jml
	FROM
		trx_blast
		JOIN trx_rule ON trx_blast.id_rules = trx_rule.id
		JOIN dim_produk ON trx_rule.product_key = dim_produk.produk_key
		GROUP BY product
		limit 5")->result();
		return $tot;
	}
	public function get_processed_blast(){
		$tot = $this->db->query("SELECT
		trx_rule.product_key as product,
		dim_produk.produk_value,
		count(*) as jml
	FROM
		trx_blast
		JOIN trx_rule ON trx_blast.id_rules = trx_rule.id
		JOIN dim_produk ON trx_rule.product_key = dim_produk.produk_key
		GROUP BY product
		limit 5")->result();
		return $tot;
	}
	

	
	
}
