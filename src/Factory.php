<?php

namespace Tstelling\Converter;

use Tstelling\Converter\Config\Config;

class Factory
{
    /**
     * Make a new convertible object instance.
     *
     * @param  mixed $object
     * @param  float $value
     * @return Convertible
     */
    public static function make($object, $value = null)
    {
        $abbreviations = Config::get('convertibles.abbreviations');

        if ($object instanceof Convertible) {
            return $object;
        }
        elseif (class_exists($object)) {
            return new $object($value);
        }
        elseif (array_key_exists($object, $abbreviations)) {
            return new $abbreviations[$object]($value);
        }

        throw new \InvalidArgumentException('Invalid convertible object specified.');
    }
}