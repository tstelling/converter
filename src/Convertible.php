<?php

namespace Tstelling\Converter;

interface Convertible
{
    /**
     * Convert to another convertible object.
     *
     * @param  mixed $to
     * @return Convertible
     */
    public function to($to);
}