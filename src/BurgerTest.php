<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHP8Burger\Burger;


class BurgerTest extends TestCase
{

    /**
     * Named Arguments to call the constructor method 
     */
    public function testWithoutNamedArguments()
    {
        $burger = new Burger("Johnys PHP 8 Burger",
                             "brioche",
                             "chilli",
                             "beef",
                             "iceberg",
                             ["jalapeno"]);
         $this->assertInstanceOf(Burger::class, $burger);
         $this->assertEquals($burger->salad, "iceberg");
         $this->assertEquals($burger->meatType, "beef");
    }     
    
    /**
     * Named Arguments to call the constructor method 
     */
    public function testNamedArguments()
    {
        $burger = new Burger(name: "Johnys PHP 8 Burger",
                             patty: "brioche",
                             sauce: "chilli",
                             meatType: "beef",
                             salad: "iceberg",
                             additions: ["jalapeno"]);
         $this->assertInstanceOf(Burger::class, $burger);
         $this->assertEquals($burger->salad, "iceberg");
         $this->assertEquals($burger->meatType, "beef");
         

    }

    /**
     * Named Arguments to call the constructor method 
     */
    public function testNamedArgumentsMixed()
    {
        $burger = new Burger(name: "Johnys PHP 8 Burger",                             
                             sauce: "chilli",
                             meatType: "beef",
                             salad: "iceberg",
                             patty: "brioche",
                             additions: ["jalapeno"]
                            );
        $this->assertInstanceOf(Burger::class, $burger);
        $this->assertEquals($burger->meatType, "beef");

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
        $this->assertInstanceOf(Burger::class, $burger);
        $this->assertEquals($burger->sauce, "chilli");
        $this->assertEquals($burger->meatType, "beef");
    }



}
