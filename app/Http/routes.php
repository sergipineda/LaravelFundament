<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

interface Fuel {
    public function getPrice();
}

class Jeep
{


    public function refuel($litres, Petrol $fuel)

    {
        return $litres * $this->fuel->getPrice();
    }
}

class Petrol
{
    public function getPrice()
    {
        return 130.7;
    }
}

$petrol = new Petrol;
$car = new JeepWrangler($petrol);

$cost = $car->refuel(60);
echo $cost;