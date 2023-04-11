<?php

class Income
{
    public $name;
    public $position;
    public $civil;
    public $status;
    public $hours;
    public $tax;
    public $regular;
    public $over;
    

    public function __construct($name, $position, $civil, $status, $hours)
    {
        $this->name = $name;
        $this->position = $position;
        $this->civil = $civil;
        $this->status = $status;
        $this->hours = $hours;

    }

    
    
    public function hourPay(){ 
    if ($this->position == 'staff'){
        if ($this->status == 'contractual'){
            return 300 / 8;
        }elseif ($this->status == 'probationary'){
            return 350 / 8;
        }else{
            return 400 / 8;
        }       
    }elseif ($this->position == 'admin'){
        if ($this->status == 'contractual'){
            return 350 / 8;
        }elseif ($this->status == 'probationary'){
            return 400 / 8;
        }else{
            return 500 / 8;
        }       
        }
    }


    public function getOverPay(){ 
        if ($this->hours < 40){
            return 0;
        }elseif($this->hours >= 40){
            if ($this->position == 'staff'){
                if ($this->status == 'contractual'){
                    return $this->over = ($this->hours - 40) * 10;
                }elseif ($this->status == 'probationary'){
                    return $this->over = ($this->hours - 40) * 25;
                }else{
                    return $this->over = ($this->hours - 40) * 30;
                }       
            }elseif ($this->position == 'admin'){
                if ($this->status == 'contractual'){
                    return $this->over = ($this->hours - 40) * 15;
                }elseif ($this->status == 'probationary'){
                    return $this->over = ($this->hours - 40) * 30;
                }else{
                    return $this->over = ($this->hours - 40) * 40;
                }       
            }
        }

    }

    public function getRegularPay(){
        if ($this->hours < 40){

            return $this->hourPay() * $this->hours;

        }elseif($this->hours >= 40){

            return $this->hourPay() * 40 ;

        }
    }

    public function grossIncome(){
            return $this->getRegularPay() + $this->getOverPay();
    }

    public function healthCare(){
        if ($this->civil == 'single'){
            return 200;
        }else{
            return 75;
        }
    }

    public function tax(){
        if ($this->civil == 'single'){
            if($this->grossIncome() > 1000){
                return $this->grossIncome() * .05;
            }elseif($this->grossIncome() <= 1000){
                return 0;
            }
        }elseif ($this->civil == 'married'){
            if($this->grossIncome() > 1000){
                return $this->grossIncome() * .03;
            }elseif($this->grossIncome() <= 1000){
                return 0;
            }
        }
    }

    public function netIncome(){ 
        
    return $this->grossIncome() - ($this->healthCare() + $this->tax());
    
    }
  

}


?>