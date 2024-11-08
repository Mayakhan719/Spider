<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (is_logged_in()) {
            if ($this->input->post()) {
                $this->_handle_form_submission();
            } else {
                $data['page_name'] = 'Login';
                $data['title'] = AppName;
                $this->load->view('auth/login', $data);
            }
        } else {
            redirect('dashboard');
        }
    }

    private function _handle_form_submission()
    {
        // Set form validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // If validation fails, redirect back to the login page
        if ($this->form_validation->run() === FALSE) {
            redirect('auth');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Check credentials (you should replace this with your actual login logic)
            // For example:
            if ($this->_authenticate_user($email, $password)) {
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid login credentials');
                redirect('auth');
            }
        }
    }

    private function _authenticate_user($email, $password)
    {
        if ($email == 'user@example.com' && $password == 'password123') {
            return true;
        }
        return false;
    }

    public function register()
    {
        if (is_logged_in()) {
            $data['page_name'] = 'Register';
            $data['title'] = AppName;
            $this->load->view('auth/register', $data);
        } else {
            redirect(base_url());
        }
    }

    public function forgot_password()
    {
        if (is_logged_in()) {
            $data['page_name'] = 'Forgot Password';
            $data['title'] = AppName;
            $this->load->view('auth/forgot_password', $data);
        } else {
            redirect(base_url());
        }
    }
	public function change_password()
	{
		if (is_logged_in()) {
			$data['page_name'] = 'Forgot Password';
            $data['title'] = AppName;
            $this->load->view('auth/change_password', $data);
		}else{
			redirect(base_url());
		}
	}
}
