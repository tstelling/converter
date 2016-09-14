<?php

namespace Tstelling\Converter;

class Converter
{
    /**
     * Convert from the specified convertible object.
     *
     * @param  mixed $value
     * @param  mixed $from
     * @return Convertible
     */
    public static function from($value, $from = null)
    {
        if ($value instanceof Convertible) {
            return Factory::make($value);
        }

        return Factory::make($from, $value);
    }
}