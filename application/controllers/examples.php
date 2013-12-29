<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		 echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
		 die();
		 $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		}

		public function pizza()
		{
			$this->grocery_crud->set_table('pizza');
			$output = $this->grocery_crud->render();

			echo "<pre>";
			print_r($output);
			echo "</pre>";
			die();
		}


	}