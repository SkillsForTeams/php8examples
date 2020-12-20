<?php declare(strict_types=1);
namespace PHP8Burger\FileRepository;
use \Attribute;


#[Attribute]
class DatasetName {
    public function __construct(public string $value) {
      
    }

    public function getValue(): string {
        return $this->value;
    }
}