<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class Login extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
	}
	
	public function index()
    {
        if ($this->session->userdata('kuller_login') == 1)
            redirect(base_url() . 'index.php/kuller/dashboard', 'refresh');
        if ($this->session->userdata('client_login') == 1)
            redirect(base_url() . 'index.php/clients/dashboard', 'refresh');

    $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|xss_clean|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|xss_clean|callback__validate_login'
            )
        );

    $this->form_validation->set_rules($config);
    $this->form_validation->set_message('_validate_login', ucfirst($this->input->post('login_type')) . 'Sisselogimine ebaõnnestus!');
    $this->form_validation->set_error_delimiters('<div class="alert alert-error">
                                <button type="button" class="close" data-dismiss="alert">×</button>', '</div>');

		if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            if ($this->session->userdata('kuller_login') == 1)
                redirect(base_url() . 'index.php/kuller/dashboard');
            if ($this->session->userdata('client_login') == 1)
                redirect(base_url() . 'index.php/clients/dashboard');
        }

	}

     /***validate login****/
    function _validate_login($str)
    {
        if ($this->input->post('login_type') == '') {
            $this->session->set_flashdata('flash_message', 'select_account_type');
            redirect(base_url() . 'index.php/login', 'refresh');
            return FALSE;
        }
        $query = $this->db->get_where($this->input->post('login_type'), array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        ));
        if ($query->num_rows() > 0) {
            $row = $query->row();
            if ($this->input->post('login_type') == 'kuller') {
                $this->session->set_userdata('kuller_login', '1');
                $this->session->set_userdata('kuller_id', $row->admin_id);
                $this->session->set_userdata('name', $row->name);
                //$this->session->set_userdata('level', $row->level);
                $this->session->set_userdata('login_type', 'kuller');
            }
            if ($this->input->post('login_type') == 'clients') {
                $this->session->set_userdata('client_login', '1');
                $this->session->set_userdata('client_id', $row->client_id);
                $this->session->set_userdata('name', $row->name);
                $this->session->set_userdata('login_type', 'clients');
            }
            return TRUE;
        } else {
            $this->session->set_flashdata('flash_message', 'login_failed');
            redirect(base_url() . 'index.php/login', 'refresh');
            return FALSE;
        }
    }

     /*******LOGOUT FUNCTION *******/
    function logout()
    {
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() . 'index.php/login', 'refresh');
    }
    
}