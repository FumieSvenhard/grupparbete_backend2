<?php
  class Pages extends Controller{
    public function __construct(){
     $this->productModel = $this->model('Product');
    }

    // Load Homepage
    public function index(){

      // Get products
      $products = $this->productModel->getProducts();

      //Set Data
      $data = [
        'title' => 'Threeboxes Bookshop Online',
        'products' => $products
      ];

      // Load homepage/index view
      $this->view('pages/index', $data);

    

    }

    public function contact(){
      //Set Data
      $data = [
        
      ];

      // Load about view
      $this->view('pages/contact', $data);
    }
  }