<?php
namespace PHP8Burger;

class Burger {
    
// constructor Property Promotion 
public function __construct(
    public string $name,
    public string $patty,
    public string $sauce,
    public string $meatType = "beef", 
    public string $salad,
    private array $additions = []
) {
}

}

?> 