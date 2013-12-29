<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemodel extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

function get_all()
	{
		$this->load->database();
		$q = $this->db->select('*')->from('pizza')->order_by('numero', 'ASC')->where('visible =','1')
		->get();
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
	}


		function get_one($id)
	{
		$q = $this->db->select('*')->from('pizza')
		->where('id',$id)
		->get();
		if($q->num_rows()>0)
		{
			return $q->row();
		}
	}


function get_allnews()
	{
		$q = $this->db->select('*')->from('news',  0, 3)
		->get();
		if($q->num_rows()>0)
		{
			foreach($q->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
	}


		function get_onenews($id)
	{
		$q = $this->db->select('*')->from('news')
		->where('id_news',$id)
		->get();
		if($q->num_rows()>0)
		{
			return $q->row();
		}
	}






	
	}

	
