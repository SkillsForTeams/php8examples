<?php
namespace PHP8Burger;

class Drink {
    
    public function __construct(public String $name, public int $sizeMl, public bool $isZero = false ) {
        
    }

    public function getSizeMl() {
        return $this->sizeMl;
    }
    public function isZero() {
        return $this->isZero;
    }
}