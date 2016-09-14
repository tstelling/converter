<?php

namespace Tstelling\Converter\Tests\Units;

use Tstelling\Converter\Tests\TestCase;
use Tstelling\Converter\Units\Length\Meter;
use Tstelling\Converter\Units\Length\Kilometer;
use Tstelling\Converter\Units\Length\Centimeter;
use Tstelling\Converter\Units\Length\Millimeter;

class LengthTest extends TestCase
{
    /**
     * Test the to method with objects.
     */
    public function testToWithObjects()
    {
        $value = (new Kilometer(1))->to(Meter::class);

        $this->assertInstanceOf(Meter::class, $value);
        $this->assertEquals(1000, $value->value());
        $this->assertEquals('1000 m', (string) $value);
    }

    /**
     * Test the to method with abbreviations.
     */
    public function testToWithAbbreviations()
    {
        $value = (new Centimeter(1))->to('mm');

        $this->assertInstanceOf(Millimeter::class, $value);
        $this->assertEquals(10, $value->value());
        $this->assertEquals('10 mm', (string) $value);
    }
}