<?php

namespace Tstelling\Converter\Units;

interface UnitInterface
{
    /**
     * Returns the name of the unit.
     *
     * @return string
     */
    public function name();

    /**
     * Returns the abbreviation of the unit.
     *
     * @return string
     */
    public function abbr();

    /**
     * Returns the symbol of the unit.
     *
     * @return string
     */
    public function symbol();
}