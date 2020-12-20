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
        $burger = new Burger(name: "Johnys PHP 8 Burger",
                             patty: "brioche",
                             sauce: "chilli",
                             meatType: "beef",
                             salad: "ruccola",
                             additions: ["jalapeno"]);
        var_dump($burger);

    }

    /**
     * Named Arguments to call the constructor method 
     */
    public function testNamedArgumentsMixed()
    {
        $burger = new Burger(name: "Johnys PHP 8 Burger",                             
                             sauce: "chilli",
                             meatType: "beef",
                             salad: "ruccola",
                             patty: "brioche",
                             additions: ["jalapeno"]
                            );
        var_dump($burger);
    }

    public function testNamedArgumentsMixedMissing()
    {
        $burger = new Burger(name: "Johnys PHP 8 Burger",                             
                             sauce: "chilli",
                             //meatType: "beef",
                             salad: "ruccola",
                             patty: "brioche",
                             //additions: ["jalapeno"]
                            );
        var_dump($burger);
    }



}
