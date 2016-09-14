<?php

namespace Tstelling\Converter\Units;

use Tstelling\Converter\Factory;
use Tstelling\Converter\Convertible;

abstract class Unit implements Convertible
{
    /**
     * @var float
     */
    protected $value;


    /**
     * Create a new unit instance.
     *
     * @param float $value
     */
    public function __construct($value = null)
    {
        $this->value = $value;
    }

    /**
     * Returns the current value.
     *
     * @return float
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * Convert the value to another unit.
     *
     * @param  mixed $to
     * @return Convertible
     */
    public function to($to)
    {
        $value = ($this->value * $this->rate()) / Factory::make($to)->rate();

        return Factory::make($to, $value);
    }

    /**
     * Returns a string representation of the object.
     *
     * @return float
     */
    public function __toString()
    {
        return $this->value() . ' ' . $this->symbol();
    }

    /**
     * Returns the rate of the unit.
     *
     * @return float
     */
    protected abstract function rate();
}