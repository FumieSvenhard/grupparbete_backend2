<?php
    class Orders extends Controller {
        public function __construct(){
            if(!isSignedin()){
                redirect('customers/signin');
            }

            $this->orderModel = $this->model('Order');

        }

        public function index(){

            // Get orders
            $orders = $this->orderModel->getOrders();

            $data = [

                'orders' => $orders
            
            ];

            $this->view('orders/index', $data); 

        }
        
        public function add(){
            if($_SERVER['REQUEST_METHOD'] == 'SESSION'){
              // Sanitize POST array
              $_SESSION = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
              $data = [
                'total' => $_SESSION['total'],
                'book_id' => $_SESSION['book_id'],
                'customer_id' => $_SESSION['user_id'],
                
              ];
      
              }
        
              $this->view('posts/add', $data);
            }
          }
          
      

    
        
    
   