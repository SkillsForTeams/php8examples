<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHP8Burger\AttributeReader;
use PHP8Burger\AttributeReaderExampleClass;



class AttributeReaderTest extends TestCase
{

    private function getAttributeReader(): AttributeReader 
    {
        $class = new AttributeReaderExampleClass();
        $attributeReader = new AttributeReader($class);
        return $attributeReader;
    }
    
    public function testGetClassAttributes() {
        $attributeReader = $this->getAttributeReader(); 
        $attributes = $attributeReader->getClassAttributes();
        $this->assertEquals($attributes[0]['name'], "PHP8Burger\ClassAttribute");
        $this->assertEquals($attributes[0]['arguments'][0], "this is the class attribute value");
    }



    public function testGetMethodAttributesOne() {
        $attributeReader = $this->getAttributeReader(); 
        $attributes = $attributeReader->getMethodAttributes("methodOne");
        $this->assertEquals($attributes[0]['name'], "PHP8Burger\MethodAttribute");
        $this->assertEquals($attributes[0]['arguments'][0], "this is method one");
    }

    public function testGetMethodAttributesTwo() {
        $attributeReader = $this->getAttributeReader(); 
        $attributes = $attributeReader->getMethodAttributeInstances("methodTwo");
        $this->assertInstanceOf(PHP8Burger\AttributeClass::class, $attributes[0]);
        $this->assertEquals($attributes[0]->getText(), "Value of Parameter A-apfel-banane-birne");
    }
}