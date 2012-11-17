<?php
/**
* 
*/
class Films extends CI_Controller
{
	
	function __construct()
	{ //parent construct
		  parent::__construct();
		  $this->load->helper('url');
     }
     function index()
     {
     
     }
     function display($sort_by='title',$sort_order='asc',$offset=0)
     {  $limit=20;
        $this->load->model('film_model');
        $results=$this->film_model->search($limit,$offset,$sort_by,$sort_order);

        $data['films']=$results['rows'];
        $data['num_films']=$results['num_rows'];

        //pagination
        $this->load->library('pagination');
        $config= array('base_url' =>site_url("films/display/$sort_by/$sort_order") ,
                       'total_rows'=>$data['num_films'],
                       'per_page'=>$limit,
                       'uri_segment'=>5);
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();

        $data['main_content']='films';
     	$this->load->view('includes/template',$data);
     }
}

?>