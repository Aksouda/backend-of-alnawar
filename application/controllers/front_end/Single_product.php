<?php


class Single_product extends CI_Controller
{

   

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('front_model/Product');
        $this->load->database();
       
    }
    public function index($id=NULL)
    {
       
        $data = $this->Product->get_single_product($id);
        
      


      /*   multiple images for the same product */
      
      $all_img= $this->Product->get_all_images($id);

      /* print_r($all_img); */
      
        $colors = $this->Product->get_color($id);

       

      $this->load->view('front/product_page_nosidebar',array('product'=>$data,'images'=>$all_img ,'colors'=>$colors));

    }
}