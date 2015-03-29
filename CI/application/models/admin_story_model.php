<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin_story_model extends CI_Model {
		
		public function __construct()
		{
			parent::__construct();
		}

		function getAllData()
		{
			$query = $this->db->query("SELECT
story.deskripsi,
story.ID
FROM
story
			");
			return $query;
		}

		function update($deskripsi)
		{
			$data = array('deskripsi' => $deskripsi);
			$this->db->where('ID',"1");
			$this->db->update('story',$data);
		}

}