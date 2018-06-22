<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->library('session');
		$this->load->view('myform');
	}

	public function validate(){
		$this->load->library('session');

		$this->form_validation->set_rules('name', 'Name', 'required|alpha|min_length[4]|max_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('borndate', 'Borndate', 'required|date');
		

		if ($this->form_validation->run() == FALSE) { 
         	$this->load->view('myform');
        }

        else{
        	$this->session->set_flashdata('success','Form Validated');
        	$this->load->view('myform');
        } 
	}
}
