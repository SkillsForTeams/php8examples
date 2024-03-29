<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHP8Burger\HealthSignal;
use PHP8Burger\Drink;
use PHP8Burger\DrinkStatus;


class HealthSignalTest extends TestCase
{

    public function testGetDrinkStatusGreenForZero()
    {
        $drink = new Drink(isZero: true, name: "cola zero", sizeMl: 500);
        $healthSignal = new HealthSignal();
        $this->assertEquals(DrinkStatus::Green, $healthSignal->getDrinkStatus($drink));

    }


    public function testGetDrinkStatusGreenForYellow()
    {
        $drink = new Drink(isZero: false, sizeMl: 300, name: "cola");
        $healthSignal = new HealthSignal();
        $this->assertEquals(DrinkStatus::Yellow, $healthSignal->getDrinkStatus($drink));

    }
    public function testGetDrinkStatusGreenForRed()
    {
        $drink = new Drink(isZero: false, name: "cola", sizeMl: 500);
        $healthSignal = new HealthSignal();
        $this->assertEquals(DrinkStatus::Red, $healthSignal->getDrinkStatus($drink));

    }
    public function testSwitchDrinkStatusGreenForRed()
    {
        $drink = new Drink(isZero: false, name: "cola", sizeMl: 500);
        $healthSignal = new HealthSignal();        
        $this->assertEquals(DrinkStatus::Red, $healthSignal->switchDrinkStatus($drink));

    }


    



}
