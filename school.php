<?php 
class School{
    private $name;
    private $level;
    private $totalUnits;
    private $lab;


    function setValues($name,$level,$totalUnits,$lab){
        $this->name = $name;
        $this->level = $level;
        $this->totalUnits = $totalUnits;
        $this->lab = $lab;
    }

    function calculate_tuition(){
        if($this->level == 'first_year' and $this->lab == 'lab'){
            $tuition = ($this->totalUnits * 550) + 3359;


        }elseif($this->level == 'first_year' and $this->lab == 'no_lab'){
            $tuition = $this->totalUnits *550;
        }
        if($this->level == 'second_year' and $this->lab == 'lab'){
            $tuition = ($this->totalUnits * 630) + 4000;


        }elseif($this->level == 'second_year' and $this->lab == 'no_lab'){
            $tuition = $this->totalUnits *630;
        }
        if($this->level == 'third_year' and $this->lab == 'lab'){
            $tuition = ($this->totalUnits * 470) + 2890;


        }elseif($this->level == 'third_year' and $this->lab == 'no_lab'){
            $tuition = $this->totalUnits *470;
        }
        if($this->level == 'fourth_year' and $this->lab == 'lab'){
            $tuition = ($this->totalUnits * 501) + 3555;


        }elseif($this->level == 'fourth_year' and $this->lab == 'no_lab'){
            $tuition = $this->totalUnits *501;
        }
       
        return $tuition;

    }




}





?>