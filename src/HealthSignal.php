<?php
namespace PHP8Burger;
use PHP8Burger\SideOrder;
use PHP8Burger\Drink;
use PHP8Burger\Burger;

class HealthSignal { 

public function __construct() {

}

public function getDrinkStatus(Drink $drink) 
{
    $result = match (true) {
         $drink->isZero() => 'green',
        ($drink->getSizeMl() <= 300) => 'yellow',
        ($drink->getSizeMl() >= 301 && $drink->isZero() == false) => 'red'                
    };
    return $result;
}

public function switchDrinkStatus(Drink $drink) 
{
    switch (true) {
        case $drink->isZero() : 
                return  'green'; 
                break;
        case ($drink->getSizeMl() <= 300 && $drink->isZero() == false):  
                return 'yellow';
                break;
        case ($drink->getSizeMl() >= 301 && $drink->isZero() == false):
                return 'red';
                break;                
    };
    
}
}
