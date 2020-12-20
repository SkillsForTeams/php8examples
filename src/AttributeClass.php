<?php declare(strict_types=1);
namespace PHP8Burger;
use PHPUnit\Framework\TestCase;
use \Attribute;


#[Attribute]
class AttributeClass {

      
    public function __construct(public string $stringParam, public array $listParam) {
      
    }

    public function getText() {

        return $this->stringParam."-".implode("-",$this->listParam);

    }
}