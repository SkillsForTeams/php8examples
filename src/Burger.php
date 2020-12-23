<?php
namespace PHP8Burger;

class Burger {
        
/**
 * Example Using Constructor Property Promotion
 * and Named Arguments
 */
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

