<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Upload_model extends CI_Model {
		
		public function __construct()
		{
			parent::__construct();
		}

		function add_image($data, $makanan)
		{
			$this->db->insert('foto',$data);
			$this->db->insert('makanan',$makanan);
		}
}