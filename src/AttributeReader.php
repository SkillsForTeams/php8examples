<?php declare(strict_types=1);
namespace PHP8Burger;
use PHPUnit\Framework\TestCase;
use PHP8Burger\BurgerRepository;


class AttributeReader {
    
    private $reflectionClass;

    public function __construct(private $attributeClass) {
        $this->reflectionClass = new \ReflectionClass($attributeClass); 
    }

    public function getClassAttributes()
    {
        $attributes = []; 
        foreach($this->reflectionClass->getAttributes() as $attribute) {
           $attributes[] = [
                "name" => $attribute->getName(),
                "arguments" => $attribute->getArguments()
            ];
            
        }
        return $attributes;     
    }

    public function getMethodAttributes($methodName) {
        $attributes = []; 
        foreach($this->reflectionClass->getMethod($methodName)->getAttributes() as $attribute) {
           $attributes[] = [
                "name" => $attribute->getName(),
                "arguments" => $attribute->getArguments()                
            ];
            
        }
        return $attributes;        
    }
    
    public function getMethodAttributeInstances($methodName) {
        $attributes = []; 
        foreach($this->reflectionClass->getMethod($methodName)->getAttributes() as $attribute) {
           $attributes[] = $attribute->newInstance();
            
        }
        return $attributes;        
    }


}