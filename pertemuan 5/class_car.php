<?php

class car{
    //property
    public $brand="inova";
    public $color;

}
//object
$inova = new car();
$fortuner = new car();

//menthod
function getbrand() {
    return $this->brand;
}

//echo
echo $inova->brand = "inova";
echo '<br><br>';
echo $fortuner->brand ="fortuner";


echo $inova->getbrand();
echo '<br>';
echo $fortuner->getbrand();

?>