<?php

namespace Tstelling\Converter\Tests\Units;

use Tstelling\Converter\Tests\TestCase;
use Tstelling\Converter\Units\Weight\Gram;
use Tstelling\Converter\Units\Weight\Kilogram;
use Tstelling\Converter\Units\Weight\Centigram;
use Tstelling\Converter\Units\Weight\Milligram;

class WeightTest extends TestCase
{
    /**
     * Test the to method with objects.
     */
    public function testToWithObjects()
    {
        $value = (new Kilogram(1))->to(Gram::class);

        $this->assertInstanceOf(Gram::class, $value);
        $this->assertEquals(1000, $value->value());
        $this->assertEquals('1000 g', (string) $value);
    }

    /**
     * Test the to method with abbreviations.
     */
    public function testToWithAbbreviations()
    {
        $value = (new Centigram(1))->to('mg');

        $this->assertInstanceOf(Milligram::class, $value);
        $this->assertEquals(10, $value->value());
        $this->assertEquals('10 mg', (string) $value);
    }
}