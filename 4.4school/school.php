<?php

class Price
{
    public $name;
    public $year;
    public $unit;
    public $lab;
    public $total;


    public function setDetails($name, $year, $unit, $lab)
    {
        $this->name = $name;
        $this->year = $year;
        $this->unit = $unit;
        $this->lab = $lab;
    }

    public function getName()
    {
        return $this->name;

    }

    public function getYear()
    {
        return $this->year;

    }

    public function getUnit()
    {
        return $this->unit;
    
    }

    public function getLab()
    {
        return $this->lab;
    
    }



    public function getDetails()
    {
        echo "Student name: " . $this->getName() . "<br>";
        echo "Year level: " . $this->getYear() . "<br>";
        echo "No. of units: " . $this->getUnit() . "<br>";


        if ($this->lab == 'with'){
            if ($this->year == 'first year'){
                return $this->total = ($this->unit * 550) + 3359;
            }elseif ($this->year == 'second year'){
                return $this->total = ($this->unit * 630) + 4000;
            }elseif ($this->year == 'third year'){
                return $this->total = ($this->unit * 470) + 2890;
            }else{
                return $this->total = ($this->unit * 501) + 3555;
            }       
        }elseif ($this->lab == 'without'){
            if ($this->year == 'first year'){
                return $this->total = $this->unit * 550;
            }elseif ($this->year == 'second year'){
                return $this->total = $this->unit * 630;
            }elseif ($this->year == 'third year'){
                return $this->total = $this->unit * 470;
            }else{
                return $this->total = $this->unit * 501;
            }       
            }
        }
    }
    



?>