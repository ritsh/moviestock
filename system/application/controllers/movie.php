<?php
/**
* 
*/
class Movie extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
      $this->load->model('listing_model');
      $data['films']=$this->listing_model->populate_movies();

      $data['main_content']='listing_view';
      $this->load->view('includes/template',$data);

	}
}
?>