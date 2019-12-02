<?php
class Employee
{
    private $position;
    private $civilStatus;
    private $employmentStatus;
    private $workedHours;
    private $overtimePay;
    private $overtime;




    function set_values($position, $civilStatus, $employmentStatus, $workedHours)
    {
        $this->position = $position;
        $this->civilStatus = $civilStatus;
        $this->employmentStatus = $employmentStatus;
        $this->workedHours = $workedHours;
    }

    function position_salary()
    {
        if ($this->workedHours <= 40) {
            if ($this->position == 'staff') {
                if ($this->employmentStatus == 'contractual') {

                    $salary = 37.5 * $this->workedHours;
                }
                if ($this->employmentStatus == 'probi') {
                    $salary = 43.75 * $this->workedHours;
                }
                if ($this->employmentStatus == 'regular') {
                    $salary = 50 * $this->workedHours;
                }
            } elseif ($this->position == 'admin') {
                if ($this->employmentStatus == 'contractual') {
                    $salary = 43.75 * $this->workedHours;
                }
                if ($this->employmentStatus == 'probi') {
                    $salary = 50 * $this->workedHours;
                }
                if ($this->employmentStatus == 'regular') {
                    $salary = 62.5 * $this->workedHours;
                }
            }

            return $salary;
        } elseif ($this->workedHours > 40) {
            if ($this->position == 'staff') {
                if ($this->employmentStatus == 'contractual') {

                    $this->overtime = ($this->workedHours - 40) * 10;
                    return $this->overtimePay = ($this->workedHours * 37.5) + $this->overtime;
                }
                if ($this->employmentStatus == 'probi') {

                    $this->overtime = ($this->workedHours - 40) * 25;
                    return $this->overtimePay = ($this->workedHours * 37.5) + $this->overtime;

                }
                if ($this->employmentStatus == 'regular') {
                   
                    $this->overtime = ($this->workedHours-40)*30;
                   return $this->overtimePay = ($this->workedHours*37.5) + $this->overtime;

                }
            } elseif ($this->position == 'admin') {
                if ($this->employmentStatus == 'contractual') {
                    
                    $this->overtime = ($this->workedHours-40)*15;
                   return $this->overtimePay = ($this->workedHours*37.5) + $this->overtime;

                }
                if ($this->employmentStatus == 'probi') {
                    
                    $this->overtime = ($this->workedHours-40)*30;
                   return $this->overtimePay = ($this->workedHours*37.5) + $this->overtime;

                }
                if ($this->employmentStatus == 'regular') {
                   
                    $this->overtime = ($this->workedHours-40)*40;
                   return $this->overtimePay = ($this->workedHours*37.5) + $this->overtime;

                }
            }
        }
    }


    // function calculate_overtime()
    // {
    //     if ($this->position == 'staff') {
    //         if ($this->employmentStatus == 'contractual') {
    //             if ($this->workedHours > 40) {
    //                 $OT = $this->workedHours - 40;

    //                 return (10 * $OT) + $this->position_salary();
    //             }
    //         }
    //         if ($this->employmentStatus == 'probi') {
    //             if ($this->workedHours > 40) {
    //                 $OT = $this->workedHours - 40;
    //                 return (25 * $OT) + $this->position_salary();
    //             }
    //         }
    //         if ($this->employmentStatus == 'regular') {
    //             if ($this->workedHours > 40) {
    //                 $OT = $this->workedHours - 40;
    //                 return (30 * $OT) + $this->position_salary();
    //             }
    //         }
    //     } elseif ($this->position == 'admin') {
    //         if ($this->employmentStatus == 'contractual') {
    //             if ($this->workedHours > 40) {
    //                 $OT = $this->workedHours - 40;
    //                 $OTRate = 15;
    //                 return ($OT * $OTRate) + $this->position_salary();
    //             }
    //             if ($this->employmentStatus == 'probi') {
    //                 if ($this->workedHours > 40) {
    //                     $OT = $this->workedHours - 40;
    //                     $OTRate = 30;
    //                     return  ($OT * $OTRate) + $this->position_salary();
    //                 }
    //             }
    //             if ($this->employmentStatus == 'regular') {
    //                 if ($this->workedHours > 40) {
    //                     $OT = $this->workedHours - 40;
    //                     $OTRate = 40;
    //                     return($OT * $OTRate) + $this->position_salary();
    //                 }
    //             }
    //         }
    //     }
    // }
    function deductions()
    {

        if ($this->civilStatus == 'single') {
            if ($this->workedHours > 40) {
                return $this->calculate_overtime() - 200;
            } else {
                return $this->position_salary() - 200;
            }
        }
        if ($this->civilStatus == 'married') {
            if ($this->workedHours > 40) {
                return $this->calculate_overtime() - 75;
            } else {
                return $this->position_salary() - 75;
            }
        }
    }
}
