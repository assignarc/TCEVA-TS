<?php

namespace App\Beans;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
use App\Traits\UtilityTrait;

class BaseBean
{
    use UtilityTrait;
    public function jsonSerialize() : mixed
    {
        return get_object_vars($this);
    }

    public function __toString(): string
    {
        return "";//UtilityTrait::VarExport($this,true);
    }

   
}