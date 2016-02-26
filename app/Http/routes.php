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

Route::group(['middleware'=>['web']],function(){
    //
});




//$gasoil = new Petrol;
//$car = new Jeep($gasolina);
//$gasolina = new Gasolina;
$car = $this-> app->bind('\App\Vehicles\Fuel','\App\Vehicles\Gasolina' );


$car = $this->app->make('\App\Vehicles\Jeep');
$cost= $car->refuel(60);
echo $cost;