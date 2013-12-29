<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ounoustrouver extends CI_Controller {

	function __construct()
	{
		parent::__construct();
  
		
	}

 public function index()
 {

$data = array(

'content'=>'article/ounoustrouver',

	);
$this->load->view('template/content',$data);
 }

}
