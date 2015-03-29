<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_cabang extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('admin_cabang_model');
    }

	public function index()
	{
		if($this->session->userdata('username'))
		{
			$data['listData'] = $this->admin_cabang_model->getAllData();
			$this->load->view('admin_cabang',$data);
		}
		else redirect("login");
	}

	public function update()
	{
		$data = $this->input->post('deskripsi');
		$this->admin_cabang_model->update($data);
		redirect("admin_cabang");
	}

	public function insert()
	{

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */