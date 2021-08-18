<?php

namespace App;

class Hydrator
{
    public static function hydrate($array, $objectClass): object
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

    public static function hydrateArray($arrays, $objectClass): array
    {
        $arrays    = $arrays['data'] ?? $arrays;
        $arraysObj = [];
        foreach ($arrays as $array)
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
            $arraysObj[] = $obj;
        }
        return $arraysObj;
    }
}