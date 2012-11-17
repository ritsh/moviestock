<?php
class Film_model extends CI_Model
{
  function search($limit,$offset,$sort_by,$sort_order)
  {
   ($sort_order=='desc')?'desc':'asc';
   $sort_columns=array('FID','title','category','rating','price','length');
   $sort_by=(in_array($sort_by,$sort_columns))?$sort_by:'title';
  //results query
  $row= $this->db->select('FID,title,category,rating,price,length')
                 ->from('film_list')
                 ->limit($limit,$offset)
                 ->order_by($sort_by,$sort_order);

   $results['rows']=$row->get()->result();

  	//count of results

   $row=$this->db->select('count(*) as count',FALSE)->from('film_list');
    //whenever u use a funtion int the field like count or max use FALSE parameter
                 
   $tmp=$row->get()->result();

   $results['num_rows']=$tmp[0]->count;

   return $results;

    }


}
?>