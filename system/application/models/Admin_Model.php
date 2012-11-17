<?php
class Admin_Model extends CI_Model
{
  function __construct()
  {

  }
  function verify_user($email_address,$password)
  {
  	$q=$this->db->where('email_address',$email_address)->where('password',md5($password))
  	             ->limit(1)
  	              ->get('ci_session');

  	if($q->num_rows>0)
  	{

  		return $q->result();
  		//print_r($q->row());
  	}
  	return false;


  }
}
?>