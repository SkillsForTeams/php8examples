<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class ComparsionTest extends TestCase {

    /**
     * This is the new behavior of PHP 8
     * @group php8only
     */
    public function testComparsionPHP8Style ()
    {
        $this->assertFalse('blahblah' == 0);
        $this->assertFalse('' == 0);
    }

    /**
     * This shows the old behavior of PHP 7 
     * @group php7only
     */
    public function testComparsionPHP7Style () 
    {
        $this->assertTrue('blahblah' == 0);
        $this->assertTrue('' == 0);                
    }
    
    /**
     * PHP 8 behavior with combined chars and numbers in string
     * @group php8only
     */
    public function testComparsionPHP8StyleNumberInString ()
    {
        $this->assertTrue(" 42" == 42);
        $this->assertTrue("42 " == 42);
        $this->assertFalse('v42' == 42);
        $this->assertFalse('42v' == 42);
    }

    /**
     * PHP 7 behavior with combined chars and numbers in string
     * @group php7only
     */
    public function testComparsionPHP7StyleNumberInString () 
    {
        $this->assertTrue(" 42" == 42);
        $this->assertTrue("42 " == 42);
        $this->assertFalse('v42' == 42);
        $this->assertTrue('42v' == 42);          
        
    }


    

    public function testComparsionNumberAsString ()
    {
        $this->assertTrue('2' == 2);
        $this->assertTrue('2.2' == 2.2);
        $this->assertTrue('0.0' == 0);
        $this->assertTrue('blahblah' == 0);
        $this->assertFalse('blahblah' == "0");
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