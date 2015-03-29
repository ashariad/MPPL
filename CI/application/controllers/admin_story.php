<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_story extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('admin_story_model');
    }

	public function index()
	{
		$data['listData'] = $this->admin_story_model->getAllData();
		$this->load->view('admin_story',$data);
	}

	public function update()
	{
		$data = $this->input->post('deskripsi');
		$this->admin_story_model->update($data);
		redirect("admin_story");
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */