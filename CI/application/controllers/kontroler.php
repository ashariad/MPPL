<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontroler extends CI_Controller {


	public function __construct()
    {
        parent::__construct();

    }

	public function index()
	{
		$this->load->view('index');
	}

	public function halaman(){
        $this->load->view('halaman');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */