<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class ComparsionTest extends TestCase {

    public function testComparsionPHP8Style ()
    {
        $this->assertFalse('blahblah' == 0);
    }
    public function testComparsionNumberAsString ()
    {
        $this->assertTrue('2' == 2);
    }
    public function testComparsionPHP7Style () 
    {
        $this->assertTrue('blahblah' == 0);        
    }
    
    public function testComparsioTypeSafe ()
    {
        $this->assertFalse('blahblah' === 0);        
    }

    public function testComparsionToFalse ()
    {
        $this->assertFalse('blahblah' == false);
    }

    public function testComparsionToTrue ()
    {
        $this->assertTrue('blahblah' == true);
    }

    public function testComparsionZeroToFalse ()
    {
        $this->assertTrue(0 == false);
    }
 


    
   
}