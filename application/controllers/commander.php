<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class commander extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->view_folder = strtolower(__CLASS__).'/';
		
	}

	public function index()
	{

		$data = array(

'test'=>"bonjour",
'pizza'=>$this->sitemodel->get_all(),
			'content'=>'article/commander',

			

			);
		$this->load->view('template/content',$data);
	}
	

	public function lacarte()
	{

		$data = array(

			'test'=>"bonjour",
			'pizza'=>$this->sitemodel->get_all(),
			'content'=>'article/commander',



			);
		$this->load->view('template/content',$data);

	}





}
