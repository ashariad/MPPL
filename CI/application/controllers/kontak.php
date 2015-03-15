<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('kontak_model');

    }

	public function index()
	{
		$this->load->view('kontak');
	}

	public function InsertFeedback()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');
		$feedback = array('nama' => $nama,
            'email' => $email,
            'pesan' => $pesan
                );
		$data = $this->kontak_model->insertDataFeedback($feedback);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */