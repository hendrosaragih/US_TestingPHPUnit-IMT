<?php
// File : Utils.php
Class Counts
{


    public function getimt($BeratBadan, $TinggiBadan)
    {
        if (($BeratBadan/pow($TinggiBadan,2)) < 18.5) { 
            return "slim";
        } 
        elseif (($BeratBadan/pow($TinggiBadan,2)) < 25) {
            return "normal";
        }
        elseif (($BeratBadan/pow($TinggiBadan,2)) < 27) {
            return "overweight";
        }
        else {
            return "obesity";
        }
    }
}
?>