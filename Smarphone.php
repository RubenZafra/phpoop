<?php

require_once("classMobile.php");

Class Smartphone extends Mobile
{
    static $type = "Smartphone";
    public $brand = "Smartphone";

    public function getBrandName(){
        echo "Smartphone";
    }

    public function Call (){
        echo "Calling Pepe";
    }
}

?>