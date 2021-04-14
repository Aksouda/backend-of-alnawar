<?php

class Product extends CI_Model 
{
    public function get_img()
    {
        $this->db->select('*'); 
         $this->db->from('product'); 
        $this->db->order_by('id','DESC');
        $this->db->limit(10);
       $q = $this->db->get();
       $result = $q->result_array();
       return $result;
       
    }

    
    public function get_single_product()
    {
        $this->db->select('*'); 
         $this->db->from('product'); 
        $this->db->limit(1);
        $this->db->where(1);
       $q = $this->db->get();
       $result = $q->result_array();
       return $result;
       
    }
}