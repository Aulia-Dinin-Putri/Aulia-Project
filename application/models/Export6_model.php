<?php defined('BASEPATH') OR die('No direct script access allowed');

class Export6_model extends CI_Model {

   
public function __construct()
{
parent::__construct();
$this->load->database();
}

// Listing
public function listing() {
$this->db->select('*');
$this->db->from('penghargaan');
$query = $this->db->get();
return $query->result();
}

}