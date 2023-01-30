<?php

require_once("abstractCharacteristics.php");
class Samsung extends Characteristic {
    public function canGame():bool{
        return True;
    }
    public function canFold():bool{
        return False;
    }
}

?>
