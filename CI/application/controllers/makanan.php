<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class makanan extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('makanan_model');
	}

	function index()
	{
		if($this->session->userdata('username'))
		{
			$data['listData'] = $this->makanan_model->getAllData();
			$this->load->view('makanan',$data);
		}
		else redirect("login");
	}
	
	function do_upload()
	{
		if($this->input->post('upload'))
		{
			$config['upload_path'] = './foto/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']    = '2048';
			$config['max_width']  = '1024';
			$config['max_height']  = '1024';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('makanan', $error);
				redirect('makanan');
			}
			else
			{
				$id_makanan = $this->input->post('id_makanan');
				$nama_makanan = $this->input->post('nama_makanan');
				$deskripsi = $this->input->post('deskripsi');
				$data=$this->upload->data();
				$this->thumb($data);
				$file=array(
				'img_name'=>$data['raw_name'],
				'thumb_name'=>$data['raw_name'].'_thumb',
				'ext'=>$data['file_ext'],
				'upload_date'=>time(),
				'id_makanan' => $id_makanan
							);
				$makanan = array(
					'id_makanan' => $id_makanan,
					'nama' => $nama_makanan,
					'deskripsi' => $deskripsi
					);
				$this->makanan_model->add_image($file, $makanan);
				$data = array('upload_data' => $this->upload->data());
				//$this->load->view('makanan', $data);
				redirect('makanan');
			}
		}
		else
		{
			redirect('makanan');
		}

	}

	function thumb($data)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] =$data['full_path'];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 200;
		$config['height'] = 150;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}

	function delete()
	{
		$id_makanan = $this->input->post('id_makanan');
		$this->makanan_model->delete($id_makanan);
		redirect('makanan');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */