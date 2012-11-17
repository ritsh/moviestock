<?php
/**
* 
*/
class Listing_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function populate_movies()
	{
      $rows=$this->db->select('film_id,title,replacement_cost')
                 ->from('film');

      if($rows)
      { $r= $rows->get()->result();
      	return $r;
      }
      
      return false;



	}
}

?>