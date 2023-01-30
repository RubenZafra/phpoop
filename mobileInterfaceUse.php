<?php 

require_once("mobileInterface.php");

class Iphone implements Phone {
    public function call(){
        echo "Call Kenny";
    }

    public function gps(){
        echo "How to get to LA?";
    }
}

?>