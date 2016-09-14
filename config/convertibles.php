<?php

return [

    'abbreviations' => [

        /**
         * Abbreviations for length units.
         */
        'mm' => \Tstelling\Converter\Units\Length\Millimeter::class,
        'cm' => \Tstelling\Converter\Units\Length\Centimeter::class,
        'm'  => \Tstelling\Converter\Units\Length\Meter::class,
        'km' => \Tstelling\Converter\Units\Length\Kilometer::class,

        /**
         * Abbreviations for weight units.
         */
        'mg' => \Tstelling\Converter\Units\Weight\Milligram::class,
        'cg' => \Tstelling\Converter\Units\Weight\Centigram::class,
        'g'  => \Tstelling\Converter\Units\Weight\Gram::class,
        'kg' => \Tstelling\Converter\Units\Weight\Kilogram::class,

    ],

];