<?php
    class Car{
        //member variables --> global --->PRIVATE
        private $brand;
        private $color;
        private $price;

        //member methods/functions
        //SETTER <-- sets the value of the private member variables
        public function set_values(){
            $this->brand = "Honda";
            $this->color = "red";
            $this->price = "100000";
        }
        public function set_values2($b, $c, $p){
            $this->brand = $b;
            $this->color = $c;
            $this->price = $p;
        }

        //GETTERS <--return the value of the private member variables
        public function get_brand(){
            return $this->brand;
        }

        public function get_color(){
            return $this->color;
        }

        public function get_price(){
            return $this->price;
        }
    }
?>