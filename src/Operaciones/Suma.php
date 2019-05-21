<?php

namespace PC\Operaciones;

class Suma
{
    public static function opera($a, $b)
    {
        $result = $a;

        for ($i=0; $i<$b; ++$i) {
            ++$result;
        }

        return $result;
    }
}
