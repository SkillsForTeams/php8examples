<?php
namespace PHP8Burger;

class BurgerPhp7 {
    
    public string $name;
    public string $patty;
    public string $sauce;
    public string $meatType;
    public string $salad;
    public string $additions; 
    
// constructor Property Promotion 
public function __construct(
    string $name,
    string $patty,
    string $sauce,
    string $meatType = "beef", 
    string $salad,
    array $additions = []
) {
    $this->name = $name;
    $this->patty = $patty;
    $this->sauce = $sauce;
    $this->meatType = $meatType;
    $this->salad = $salad;
    $this->additions = $additions
}

}

?> 