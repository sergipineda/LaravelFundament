<?php
namespace App\Vehicles;

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 26/02/16
 * Time: 20:05
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