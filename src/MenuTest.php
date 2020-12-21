<?php declare(strict_types=1);
namespace PHP8Burger;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{   
    
    
    
    public function testGetMenuNullsafeNull()
    {
        
        $burger = new Burger(name: "Johnys Banana Burger",                             
                             sauce: "cranberry",
                             meatType: "beef",
                             salad: "ruccola",
                             patty: "vollkorn",
                             additions: ["camembert,banana"]
                            );
        $menu = new Menu($burger, drink:null, sideOrder: null);
        $this->assertNull($menu?->drink?->isZero());
        
    }

    public function testGetMenuNullsafeValue()
    {
        
        $burger = new Burger(name: "Johnys Banana Burger",                             
                             sauce: "cranberry",
                             meatType: "beef",
                             salad: "ruccola",
                             patty: "vollkorn",
                             additions: ["camembert,banana"]
                            );
        $drink = new Drink(isZero: false, name: "Bier", sizeMl: 1000);                            
        $menu = new Menu($burger, drink:$drink, sideOrder: null);
        $this->assertEquals(1000, $menu?->drink?->sizeMl);
        $this->assertFalse($menu->drink->isZero());
        

    }


   


    



}
