<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class panier extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->view_folder = strtolower(__CLASS__).'/';
		
	}

	public function index()
	{

		//echo $this->input->post('quantite');
		//$idp= $this->input->post('idpiz');
		

		$data = array(

			'test'=>"bonjour",
			'cart'=>$this->cart->contents(),
			'total'=>$this->cart->total(),
			'total_articles'=>$this->cart->total_items(),
			'content'=>'article/panier',

			

			);
		$this->load->view('template/content',$data);
	}



	public function panier()
	{

		$data = array(

			'cart'=>$this->cart->contents(),
			'total'=>$this->cart->total(),
			'total_articles'=>$this->cart->total_items(),
			'content'=>'panier',
			);
		$this->load->view('template/content',$data);
	}

	

	/*public function add($id=null)
	{
		
		
		if(!$id || !$this->sitemodel->get_one($id)){
			redirect();exit;
		}
		
		$pizza = $this->sitemodel->get_one($id);

		$data = array(

			'id'=>$pizza->id,
			'qty'=>1,
			'price'=>$pizza->prix,
			'name'=>$pizza->noms
			);
		$this->cart->insert($data);
		redirect('panier');exit;
	}*/




	public function add($id=null)
	{
		if(!$id || !$this->sitemodel->get_one($id)){
			redirect();exit;
		}
		$pizza = $this->sitemodel->get_one($id);
		$qttpiz = $this->input->post('quantite');
		$data = array(
			
			'id'=>$pizza->id,
			'qty'=>1,
			'price'=>$pizza->prix,
			'name'=>$pizza->noms 
			);
		$this->cart->insert($data);
		redirect('panier');exit;
	}


public function delete($id=null)
	{
		if(!$id){redirect();exit;}
		$data = array(
			'id'=>$id,
			'qty'=>0,
			);

		$this->cart->update($data);

		/*if($this->input->is_ajax_request()){
			$response = array(
				'success'=>true,
				'nb_article'=>$this->cart->total_items(),
				'total'=>number_format($this->cart->total(), 2, ',', ' ')
				);
			echo json_encode($response);exit;
		}*/

		redirect('panier');
	}


	public function update($id=null)
	{
		if(!$id || !$this->input->post('qty') || !is_numeric($this->input->post('qty'))){
			redirect('panier');exit;
		}
		$data = array(
			'id'=>$id,
			'qty'=>$this->input->post('qty')
			);
		$this->cart->update($data);

		if($this->input->is_ajax_request()){
			$response = array(
				'success'=>true,
				'nb_article'=>$this->cart->total_items(),
				'total'=>number_format($this->cart->total(), 2, ',', ' '),
				'total_for_item'=>number_format($this->input->post('qty') * $this->input->post('price'), 2, ',', ' ')
				);
			echo json_encode($response);exit;
		}

		redirect('panier');
	}



/*	public function signup()
	{
		


		$this->form_validation->set_rules('quantite','Quantité','trim|required');

		if($this->form_validation->run())
		{
			$user = array(
				
				'content'=>'panier',

				);

			$this->load->view('template/content',$data);
		}
*/




	}
