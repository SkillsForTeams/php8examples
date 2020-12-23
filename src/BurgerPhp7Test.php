<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHP8Burger\BurgerPhp7;


class BurgerPhp7Test extends TestCase
{

    /**
     * Named Arguments to call the constructor method 
     */
    public function testNamedArguments()
    {
        $burger = new BurgerPhp7("Johnys PHP 8 Burger",
                                 "brioche",
                                 "chilli",
                                 "beef",
                                 "ruccola",
                                ["jalapeno"]);
       $this->assertInstanceOf(BurgerPhp7::class, $burger);


    }

   



}
