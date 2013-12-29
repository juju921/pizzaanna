<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
  
		
	}

 public function index()
 {

$data = array(
'title'=>"bienvenue",
'pizzas'=>$this->sitemodel->get_all(),
'content'=>'article/inscription',

	);
$this->load->view('template/content',$data);
 }

}
