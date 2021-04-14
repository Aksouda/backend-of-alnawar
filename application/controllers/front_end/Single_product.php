<?php


class Single_product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('front/Product');
        $this->load->database();
       
    }
    public function index()
    {
        $product = $this->Product->get_single_product();
        $data['product'] = $product;
        $this->load->view('front/single_product',$data);
    }
}