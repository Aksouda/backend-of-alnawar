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

    
    public function get_single_product($id)
    {
        
         
       /**$this->db->from('vehicles');
            $this->db->where('id_vehicle', $id_vehicle);*/
            $query = $this->db->query("SELECT * FROM product WHERE id = '$id'");
            $row = $query->row();
            return $row;/*$this->db->get()->row();*/
       
       /*  return $this->db->get_where('product',['id'=>$id])->row(); */
       
       
       
    }

    public function get_all_images($id)
    {
            $query = $this->db->query("SELECT * FROM product_image WHERE product_id = '$id'");
            $row = $query->result_array();
            return $row;
    }


    public function get_color($id)
    {
            $query = $this->db->query("SELECT * FROM product_size  WHERE product_id = '$id'");
            $row = $query->result_array();
            return $row;
    }

    /* public function get_sizes($id)
    {
            $query = $this->db->query("SELECT size_id FROM  WHERE size_id = '$id'");
            $row = $query->result_array();
            return $row;
    }
 */


    /* public function get_vehicle_by_id($id) {
        $query = $this->db->select('*')
        ->from('product')
        ->where('id', $id)
        ->get()
        ->row();
        
        return $query;
        }  */
}