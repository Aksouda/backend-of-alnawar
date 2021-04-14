<?php
class Front extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('front_model/Product');
        

        $this->load->database();
       
    }

    public function index()
        { 
            $product = $this->Product->get_img();
            /* foreach($product as $item){
                return $item;
            } */

            /* $data['product'] = $product->get_img(); */
            $data['product'] = $product;
            $this->load->view('front/index',$data);

          

        } 


$id = $this->db->insert_id();

    public function Product_single($id)
        {
        $single = $this->Product->get_single_product();
        $content['single'] = $single
        


        $rows_cat = $this->Product->cat_list();
        $tags = $this->db->get('tag')->result_array();
        $img = $this->db->get_where('product_image',array('product_id'=>$id));
        $data = $this->db->get_where('product',['id'=>$id])->row();
        $cat = $this->db->get_where('product_category',array('product_id'=>$id))->result_array()[0]['category_id'];
        $colors = $this->db->get_where('product_size',['product_id'=>$id])->result_array();
        //print_r($this->db->last_query());exit;
        $attr = $this->db->get_where('product_attribute',['product_id'=>$id])->result_array();
        
        
        
        
        $this->load->view('product_page_nosidebar',array( 'single'=>$single,'rows_cat'=>$rows_cat,'tags'=>$tags,'up_data'=>$data,'img'=>$img,'cat'=>$cat,'colors'=>$colors,'attr'=>$attr));
        }
        
        
        
}