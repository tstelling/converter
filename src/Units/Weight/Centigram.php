<?php

namespace Tstelling\Converter\Units\Weight;

use Tstelling\Converter\Units\Unit;
use Tstelling\Converter\Units\UnitInterface;

class Centigram extends Unit implements UnitInterface
{
    /**
     * Returns the name of the unit.
     *
     * @return string
     */
    public function name()
    {
        return 'Centigram';
    }

    /**
     * Returns the abbreviation of the unit.
     *
     * @return string
     */
    public function abbr()
    {
        return 'cg';
    }

    /**
     * Returns the symbol of the unit.
     *
     * @return string
     */
    public function symbol()
    {
        return 'cg';
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