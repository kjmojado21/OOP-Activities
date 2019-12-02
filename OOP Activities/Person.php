<?php
    class Person{
        private $name;
        private $address;
        private $age;

        public function set_values($name, $add, $age){
            $this->name = $name;
            $this->address = $add;
            $this->age = $age;
        }

        public function get_name(){
            return $this->name;
        }
        public function get_add(){
            return $this->address;
        }
        public function get_age(){
            return $this->age;
        }
    }
?>