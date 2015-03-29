<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Story extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('story_model');


    }

	public function index()
	{
		$data['listData'] = $this->story_model->getAllData();
		$this->load->view('story',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */