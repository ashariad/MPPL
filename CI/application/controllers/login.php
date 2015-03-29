<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('login_model');
 }

 function index()
 {
   	$this->load->helper(array('form'));
   	$this->load->view('login');
 }

 function cek()
 {
 	$username = $this->input->post('username');
 	$password = $this->input->post('password');
 	$data = $this->login_model->login($username,$password);
 	
 	
 	//print_r($data);
    $this->session->set_userdata('username',$data[0]->username);
    //$msg = $this->session->userdata('username');
 	redirect("makanan");
 }

 function logout()
 {
 	$this->session->unset_userdata('username');
	redirect("login");
 }

}

?>