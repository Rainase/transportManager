<?php
if (! defined('BASEPATH'))
exit('Access not allowed!');

class Kuller extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->database();

	}
	

	function index(){

		
		if ($this->session->userdata('kuller_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('kuller_login') == 1)
            redirect(base_url() . 'index.php/kuller/dashboard', 'refresh');
	}

	function dashboard()
    {
        if ($this->session->userdata('kuller_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('courier_dashboard');
        $this->load->view('index', $page_data);
    }
    	function clients($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('kuller_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['client_id']   = $param1;
        $page_data['clients']   = $this->db->get_where('product', array(
            'product_type_id' => $param1
        ))->result_array();
        $page_data['page_name']  = 'clients';
        $page_data['page_title'] = get_phrase('courier_clients');
        $this->load->view('index', $page_data);

    }

    function manage_profile($param1 = '', $param2 = '', $param3 = ''){

        if($this->session->userdata('kuller_login') != 1)
                redirect(base_url(), 'refresh');
        $page_data['manage_profile']   = $this->db->get('kuller')->result_array();
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $this->load->view('index', $page_data);

    }
}