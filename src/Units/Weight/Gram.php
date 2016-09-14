<?php

namespace Tstelling\Converter\Units\Weight;

use Tstelling\Converter\Units\Unit;
use Tstelling\Converter\Units\UnitInterface;

class Gram extends Unit implements UnitInterface
{
    /**
     * Returns the name of the unit.
     *
     * @return string
     */
    public function name()
    {
        return 'Gram';
    }

    /**
     * Returns the abbreviation of the unit.
     *
     * @return string
     */
    public function abbr()
    {
        return 'g';
    }

    /**
     * Returns the symbol of the unit.
     *
     * @return string
     */
    public function symbol()
    {
        return 'g';
    }

    /**
     * Returns the rate of the unit.
     *
     * @return float
     */
    protected function rate()
    {
        return 1;
    }
}