<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class feedback_model extends CI_Model {
		
		public function __construct()
		{
			parent::__construct();
		}

		function getFeedbackData()
		{
			$query = $this->db->query("SELECT
feedback.id_feedback,
feedback.nama,
feedback.email,
feedback.pesan
FROM
feedback
");
			return $query;
	}
}