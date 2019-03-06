<?php
    class Order {
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getOrders(){
           $this->db->query('SELECT * FROM books');
           
           $results = $this->db->resultSet();

           return $results;
        }

      
    }
