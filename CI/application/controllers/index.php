<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('makanan_model');

    }

	public function index()
	{
		$data['listData'] = $this->makanan_model->getAllData();
		$this->load->view('halaman',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */