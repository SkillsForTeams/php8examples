<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHP8Burger\FileRepository\FileRepository;
use PHP8Burger\BurgerDataSet;
use PHP8Burger\Burger;



class FileRepositoryTest extends TestCase
{
    
    private function getBurger() {
        $burger = new Burger(name: "Johnys PHP 8 Burger",
        patty: "brioche",
        sauce: "chilli",
        meatType: "beef",
        salad: "ruccola",
        additions: ["jalapeno"]);
        return $burger;
    }
    public function testConstructor()
    {
       $burger = $this->getBurger();
       $dataSet = new BurgerDataSet($burger); 
       $fileRepository = new FileRepository($dataSet); 
       $this->assertInstanceOf(FileRepository::class, $fileRepository);           
    }

    public function testSave()
    {
        $targetFile = __DIR__."/data/BurgerData.json";
        if(!file_exists($targetFile))  { 
            $startLines = 0; 
        } else {
            $startLines = count(explode(PHP_EOL,file_get_contents($targetFile)))-1;
        }

        $burger = $this->getBurger();
        $dataSet = new BurgerDataSet($burger); 
        $fileRepository = new FileRepository($dataSet); 
        $fileRepository->save(); 
        $this->assertFileExists($targetFile);
        $endLines =  count(explode(PHP_EOL,file_get_contents($targetFile)))-1;
        $this->assertEquals($startLines+1, $endLines);

    }
}