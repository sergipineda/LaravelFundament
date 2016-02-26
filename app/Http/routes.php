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

    public function _construct(Petrol $fuel) {

    }

    public function refuel($litres, Petrol $fuel)

    {
        $fuel = new Petrol;
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

//$gasoil = new Petrol;
//$car = new Jeep($gasolina);
//$gasolina = new Gasolina;

$car = $this->app->make('Jeep');
echo $car->refuel(60);