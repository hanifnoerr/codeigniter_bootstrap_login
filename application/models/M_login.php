<?php 
 
class M_login extends CI_Model{	
	function status($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}