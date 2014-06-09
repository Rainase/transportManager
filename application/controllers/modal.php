<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modal extends CI_Controller {

	
	function __construct()
    {
        parent::__construct();
		$this->load->database();
		
    }
	
	/***default functin, redirects to login page if no admin logged in yet***/
	public function index()
	{
		
	}
	
	
	function popup($param1 = '' , $param2 = '' , $param3 = '')
	{
		if($param1	==	'product_full_info' )
		{
			$page_data['current_product_id']	=	$param2;
		}
		
		
		$page_data['page_name']		=	$param1;
		$this->load->view('modal' ,$page_data);
	}
}

