<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabang extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('admin_cabang_model');

    }

	public function index()
	{
		$data['listData'] = $this->admin_cabang_model->getAllData();
		$this->load->view('cabang',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */