<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		this->view_folder =strtolower(_CLASS_).'/';
		
	}

 public function index()
 {

data = array(
'title'=>"bienvenue",
'content'=>this->view_folder._FUNCTION_,

	);
this->load->view('template/content',$data);
 }

}
