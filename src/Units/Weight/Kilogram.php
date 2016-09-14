<?php

namespace Tstelling\Converter\Units\Weight;

use Tstelling\Converter\Units\Unit;
use Tstelling\Converter\Units\UnitInterface;

class Kilogram extends Unit implements UnitInterface
{
    /**
     * Returns the name of the unit.
     *
     * @return string
     */
    public function name()
    {
        return 'Kilogram';
    }

    /**
     * Returns the abbreviation of the unit.
     *
     * @return string
     */
    public function abbr()
    {
        return 'kg';
    }

    /**
     * Returns the symbol of the unit.
     *
     * @return string
     */
    public function symbol()
    {
        return 'kg';
    }

    /**
     * Returns the rate of the unit.
     *
     * @return float
     */
    protected function rate()
    {
        return 1000;
    }
}