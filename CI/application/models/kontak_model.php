<?php

class kontak_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
        $this->load->database();
	}

    function insertDataFeedback($feedback){
    	$this->db->insert('feedback',$feedback);
    }

    
	
}