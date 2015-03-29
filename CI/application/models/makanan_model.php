<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Makanan_model extends CI_Model {
		
		public function __construct()
		{
			parent::__construct();
		}

		function add_image($data, $makanan)
		{
			$this->db->insert('foto',$data);
			$this->db->insert('makanan',$makanan);
		}

		function getAllData()
		{
			$query = $this->db->query("SELECT
			makanan.id_makanan,
			makanan.nama,
			makanan.deskripsi,
			foto.thumb_name,
			foto.ext,
			foto.img_name
			FROM
			foto ,
			makanan
			WHERE makanan.id_makanan = foto.id_makanan");
			return $query;
		}

		function delete($id_makanan)
		{
			$this->db->where('id_makanan',$id_makanan);
			$this->db->delete('makanan');

			$this->db->where('id_makanan',$id_makanan);
			$this->db->delete('foto');
		}

}