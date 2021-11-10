<?php

namespace Flo\CargoAras;

use Flo\CargoBase\BaseInterface;

class Cargo implements BaseInterface
{

    public function createPackage($params, $additional_data = [])
    {
       
    }

    public function isRequiredAuth(): bool
    {
        return false;
    }
}