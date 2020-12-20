<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHP8Burger\Burger;


class BurgerTest extends TestCase
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
                             additions: ["jalapeno"]);
        var_dump($burger);

    }

   



}
