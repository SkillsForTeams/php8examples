<?php
namespace PHP8Burger;
use PHP8Burger\SideOrder;
use PHP8Burger\Drink;
use PHP8Burger\Burger;

class Menu {
     
    public function __construct(public Burger $burger, public Drink|null $drink, public SideOrder|Drink|null $sideOrder) {
        
    }
}