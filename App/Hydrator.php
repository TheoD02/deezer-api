<?php

namespace App;

class Hydrator
{
    public static function hydrate($array, $objectClass)
    {
        $obj = new $objectClass();
        foreach ($array as $key => $value)
        {
            $method = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
            if (is_callable([$obj, $method]))
            {
                $obj->$method($value);
            }
        }
        return $obj;
    }
}