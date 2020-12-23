<?php
namespace PHP8Burger;

class BurgerPhp7 {
    
    public string $name;
    public string $patty;
    public string $sauce;
    public string $meatType;
    public string $salad;
    public array $additions; 
    
/** 
 * PHP 7 Example without constructor Property Promotion
 * has unnamed Arguments
 */
public function __construct(
    string $name,
    string $patty,
    string $sauce,
    string $salad,
    string $meatType = "beef", 
    array $additions = []
) {
    $this->name = $name;
    $this->patty = $patty;
    $this->sauce = $sauce;
    $this->meatType = $meatType;
    $this->salad = $salad;
    $this->additions = $additions;
}

}
