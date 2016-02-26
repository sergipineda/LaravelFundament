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



class Jeep
{

    public function _construct(Fuel $fuel) {
        $this-> fuel= $fuel;

    }

    public function refuel($litres)

    {

        return $litres * $this->fuel->getPrice();
    }
}

class Petrol implements Fuel
{
    public function getPrice()
    {
        return 1;
    }
}
class Gasolina implements Fuel
{
    public function getPrice()
    {
        return 2;
    }
}

//$gasoil = new Petrol;
//$car = new Jeep($gasolina);
//$gasolina = new Gasolina;
$car = $this-> app->bind('Fuel','Gasolina' );


$car = $this->app->make('Jeep');
$cost= $car->refuel(60);
echo $cost;