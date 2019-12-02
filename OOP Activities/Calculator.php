<?php
    class Calculator{
        private $num1;
        private $num2;
        private $op;

        

        public function set_values($n1, $n2, $op){
            $this->num1 = $n1;
            $this->num2 = $n2;
            $this->op = $op;
        }

        public function compute(){

            if($this->op == "add"){
                $ans = $this->num1 + $this->num2;
            }else if($this->op == "sub"){
                $ans = $this->num1 - $this->num2;
            }else if($this->op == "mult"){
                $ans = $this->num1 * $this->num2;
            }else if($this->op == "div"){
                $ans = $this->num1 / $this->num2;
            }

            return $ans;
        }
    }
?>