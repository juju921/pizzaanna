<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quisommesnous extends CI_Controller {

	function __construct()
	{
		parent::__construct();
  
		
	}

 public function index()
 {

$data = array(

'content'=>'article/quisommesnous',



	);
$this->load->view('template/content',$data);
 }

}
