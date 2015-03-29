<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Story_model extends CI_Model {
		
		public function __construct()
		{
			parent::__construct();
		}

		function getAllData()
		{
			$query = $this->db->query("SELECT
			story.deskripsi
			FROM
			story
			");
			return $query;
		}

}