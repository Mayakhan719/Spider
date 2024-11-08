<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (is_logged_in()) {
			$data['page_name'] = 'Dashboard';
			$data['title'] = AppName;
			$this->load->view('dashboard', $data);
		} else {
			redirect(base_url());
		}
	}

}
