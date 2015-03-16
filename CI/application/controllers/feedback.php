<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class feedback extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('feedback_model');
	}

	function index()
	{
		$data['listData'] = $this->feedback_model->getFeedbackData();
		$this->load->view('feedback',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */