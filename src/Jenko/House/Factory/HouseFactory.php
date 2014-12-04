<?php

namespace Jenko\House\Factory;

use Jenko\House\House;
use Jenko\House\Location;

interface HouseFactory
{
    /**
     * @param Location|string|null $currentLocation
     * @return House
     */
    public static function getHouse($currentLocation = null);
}
