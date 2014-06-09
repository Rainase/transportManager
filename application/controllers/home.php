<?php
if (! defined('BASEPATH'))
exit('Access not allowed!');

class Home extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->database();

	}
	

	function index(){

		if ($this->session->userdata('kuller_login') != 1)
            redirect(base_url() . 'index.php/login', 'refresh');
        if ($this->session->userdata('kuller_login') == 1)
            redirect(base_url() . 'index.php/kuller/dashboard', 'refresh');
	}
}