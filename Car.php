<?php 

class Car{
    // member variables--> global ------> private
    // member methods
    private $brand; 
    private $color;
    private $price;

    // setter
    public function set_values(){
        $this->brand = "honda";
        $this->color = "red";
        $this->price = "100000";
    }
    
    function setValues2($a,$b,$c){
        $this->brand = $a;
        $this->color = $b;
        $this->price = $c;
    
    }

    
    // getters  <--- return the value of the private variables
    public function get_brand(){
        return $this->brand;
    }
    function get_color(){
        return $this->color;
    }
    function get_price(){
        return $this->price;
        
    }
    
}








?>