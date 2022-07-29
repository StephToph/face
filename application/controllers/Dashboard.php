<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index() {
		if(empty($this->session->userdata('fa_user_id'))) {
			redirect(base_url('login'), 'refresh');
		}

		$user_id = $this->session->userdata('fa_user_id');
		

		$data['user_id'] = $user_id;

		$data['title'] = 'Dashboard | '.app_name;
		$data['page_active'] = 'dashboard';
		$this->load->view('design/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('design/footer', $data);
	}

}
