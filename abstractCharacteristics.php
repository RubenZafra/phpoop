<?php

abstract class Characteristic 

{
    public $color;
    private $size;
    abstract public function canGame(): bool;
    abstract public function canFold(): bool;

}





?>