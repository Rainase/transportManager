<?php
if (! defined('BASEPATH'))
exit('Access not allowed!');

class Clients extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->database();

	}
	

	function index(){

		
		if ($this->session->userdata('client_login') != 1)
            redirect(base_url() . 'index.php/login', 'refresh');
        if ($this->session->userdata('client_login') == 1)
            redirect(base_url() . 'index.php/clients/dashboard', 'refresh');
	}

	function dashboard(){

		if($this->session->userdata('client_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		$page_data['page_name'] = 'dashboard';
		$page_data['page_title'] = get_phrase('client_dashboard');
		$this->load->view('index', $page_data);

	}

	function kullerid(){
		if($this->session->userdata('client_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		$page_data['page_name'] = 'kullerid';
		$page_data['page_title'] = get_phrase('couriers');
		$this->load->view('index', $page_data);
	}

	function my_shipments($param1 = '', $param2 = '', $param3 = ''){

		if($this->session->userdata('client_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['description']    = $this->input->post('description');
            $data['weight']         = $this->input->post('weight');
            $data['size']     = $this->input->post('size');
            $data['date_pickup_first']       = $this->input->post('date_pickup_first');
            $data['date_pickup_last']       = $this->input->post('date_pickup_last');
            $data['quantity']    = $this->input->post('quantity');
            $data['date_arrive_first'] = $this->input->post('date_arrive_first');
            $data['date_arrive_last'] = $this->input->post('date_arrive_last');
            $data['client_id'] = $this->session->userdata('client_id');
            $this->db->insert('shipments', $data);
            $shipment_id = mysql_insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/shimpent_image/' . $student_id . '.jpg');
            //$this->email_model->account_opening_email('student', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'index.php/clients/my_shipments/', 'refresh');
        }
        if ($param2 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['description']    = $this->input->post('description');
            $data['weight']         = $this->input->post('weight');
            $data['size']     = $this->input->post('size');
            $data['date_pickup_first']       = $this->input->post('date_pickup_first');
            $data['date_pickup_last']       = $this->input->post('date_pickup_last');
            $data['quantity']    = $this->input->post('quantity');
            $data['date_arrive_first'] = $this->input->post('date_arrive_first');
            $data['date_arrive_last'] = $this->input->post('date_arrive_last');
            
            $this->db->where('shimpent_id', $param3);
            $this->db->update('shipments', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $param3 . '.jpg');
            $this->crud_model->clear_cache();
            
            redirect(base_url() . 'index.php/clients/my_shipments/' . $param1, 'refresh');
        }
       if ($param2 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('shimpents', array(
                'shimpent_id' => $param3
            ))->result_array();
        }

		$page_data['my_shipments']   = $this->db->get_where('shipments', array(
            'client_id' => $this->session->userdata('client_id')))->result_array();	
		$page_data['page_name'] = 'my_shipments';
		$page_data['page_title'] = get_phrase('my_shipments');
		$this->load->view('index', $page_data);
	}

	function manage_profile($param1 = '', $param2 = '', $param3 = ''){

		if($this->session->userdata('client_login') != 1)
			redirect(base_url(), 'refresh');
		$page_data['manage_profile'] = $this->db->get('clients')->result_array();
		$page_data['page_name'] = 'manage_profile';
		$page_data['page_title'] = get_phrase('manage_profile');
		$this->load->view('index', $page_data);	
	}


}