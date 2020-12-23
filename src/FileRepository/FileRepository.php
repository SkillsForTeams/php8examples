<?php
namespace PHP8Burger\FileRepository;
use PHP8Burger\FileRepository\DatasetName;

class FileRepository {

    private string $datasetName;
    
    private string $targetFile;
    

    public function __construct(public object $dataSet, public string|null $dir = null)
    {
        $reflectionClass = new \ReflectionClass($dataSet); 
        $attributes =  $reflectionClass->getAttributes(DatasetName::class);        
        $this->datasetName = $attributes[0]->newInstance()->getValue();
        if(!file_exists($dir)) {
            $dir= __DIR__."/data";
        }
        $this->dir = $dir;
        $this->targetFile = $this->dir."/".$this->datasetName.".json";




    }
    
    public function save()
    {
        $jsonData = json_encode($this->dataSet).PHP_EOL;         
        file_put_contents($this->targetFile, $jsonData, FILE_APPEND);
    }
     
}