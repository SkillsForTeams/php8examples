<?php
namespace PHP8Burger;
use PHP8Burger\SideOrder;
use PHP8Burger\Drink;
use PHP8Burger\DrinkStatus;
use PHP8Burger\Burger;

class HealthSignal { 

public function __construct() {

}

public function getDrinkStatus(Drink $drink) : DrinkStatus
{
    $result = match (true) {
        ($drink->isZero()) => DrinkStatus::Green,
        ($drink->getSizeMl() <= 300) => DrinkStatus::Yellow,
        ($drink->getSizeMl() >= 301 && $drink->isZero() == false) => DrinkStatus::Red                
    };
    return $result;
}

public function switchDrinkStatus(Drink $drink)
{
    switch (true) {
        case $drink->isZero() : 
                return  DrinkStatus::Green; 
                break;
        case ($drink->getSizeMl() <= 300 && $drink->isZero() == false):  
                return DrinkStatus::Yellow;
                break;
        case ($drink->getSizeMl() >= 301 && $drink->isZero() == false):
                return DrinkStatus::Red;
                break;                
    };
    
}
public function isDrinkStatus(DrinkStatus $status, Drink $drink) : DrinkStatus
{
    
    return $status == $this->switchDrinkStatus($drink);
}

}
