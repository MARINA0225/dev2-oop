<?php

class Price
{

    public $age;
    public $distance;
    public $fare;

    public function setDetails($age, $distance)
    {
        $this->age = $age;
        $this->distance = $distance;
        
    }

    public function getAge()
    {

        return $this->age;

    }

    public function getDistance()
    {

        return $this->distance;

    }

    public function getDetails()
    {
        echo "Age: " . $this->getAge() . " years old <br>";
        echo "Distance: " . $this->getDistance(). " km <br>";
    }


    public function getFare()
    {
        
        $fare = 8;

        if($this->age>=10 && $this->age<=59){
        
            if($this->distance<=4){
                echo "Fare: " . $fare;

            }elseif($this->distance>=5){
                echo "Fare: " . $fare + $this->distance-4;
                
            }

    
        }elseif($this->age>=60 && $this->age<=80) {

            if($this->distance<=4){
                echo "Fare: " . $fare * 0.8;
            }elseif($this->distance>=5){
                echo "Fare: " . ($fare + $this->distance - 4) * 0.8 ;
            }
        }
    
    }
}

