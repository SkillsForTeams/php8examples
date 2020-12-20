<?php
namespace PHP8Burger;
use PHP8Burger\Burger;
use PHP8Burger\AttributeClass;

#[ClassAttribute('this is the class attribute value')]
class AttributeReaderExampleClass {
    public function __construct() {

    }
    
    
    #[MethodAttribute('this is method one')]
    public function methodOne() {
        return 1;
    }

    #[AttributeClass(stringParam: "Value of Parameter A", listParam: ["apfel", "banane", "birne"] )]
    public function methodTwo()  {
      return 2;
    }
}


