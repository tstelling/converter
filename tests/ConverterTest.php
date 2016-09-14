<?php

namespace Tstelling\Converter\Tests;

use Tstelling\Converter\Converter;
use Tstelling\Converter\Units\Length\Meter;
use Tstelling\Converter\Units\Length\Kilometer;
use Tstelling\Converter\Units\Length\Centimeter;

class ConverterTest extends TestCase
{
    /**
     * Test the convert method with objects.
     */
    public function testConvertWithObjects()
    {
        $unit = Converter::from(new Kilometer(1))->to(Meter::class);

        $this->assertInstanceOf(Meter::class, $unit);
        $this->assertEquals(1000, $unit->value());
    }

    /**
     * Test the convert method with abbreviations.
     */
    public function testConvertWithAbbreviations()
    {
        $unit = Converter::from(0.10, 'm')->to('cm');

        $this->assertInstanceOf(Centimeter::class, $unit);
        $this->assertEquals(10, $unit->value());
    }
}