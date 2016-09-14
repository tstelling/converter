<?php

namespace Tstelling\Converter\Units\Length;

use Tstelling\Converter\Units\Unit;
use Tstelling\Converter\Units\UnitInterface;

class Centimeter extends Unit implements UnitInterface
{
    /**
     * Returns the name of the unit.
     *
     * @return string
     */
    public function name()
    {
        return 'Centimeter';
    }

    /**
     * Returns the abbreviation of the unit.
     *
     * @return string
     */
    public function abbr()
    {
        return 'cm';
    }

    /**
     * Returns the symbol of the unit.
     *
     * @return string
     */
    public function symbol()
    {
        return 'cm';
    }

    /**
     * Returns the rate of the unit.
     *
     * @return float
     */
    protected function rate()
    {
        return 0.01;
    }
}