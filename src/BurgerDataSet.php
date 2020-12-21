<?php
namespace PHP8Burger;
use PHP8Burger\Burger;
use PHP8Burger\FileRepository\DatasetName;


#[DatasetName('BurgerDataStorage')]
class BurgerDataSet {
       
    public string $date; 

    public function __construct(public  Burger $burger) {
        $this->date= date("Y-m-d H:i:s");
    }

    

    
    
}
