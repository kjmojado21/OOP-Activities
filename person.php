<?php 
class Person{

        private $name;
        private $age;
        private $address;


        function set_person($name,$age,$address){
            $this->name = $name;
            $this->age = $age;
            $this->address = $address;

        }

        function get_person(){
            return $this->name;
        }
        function get_age(){
            return $this->age;
        }
        function get_address(){
            return $this->address;
        }
}





?>