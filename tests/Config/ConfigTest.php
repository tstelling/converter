<?php

namespace Tstelling\Converter\Tests\Config;

use Tstelling\Converter\Config\Config;
use Tstelling\Converter\Tests\TestCase;

class ConfigTest extends TestCase
{
    /**
     * Test the get method.
     */
    public function testGet()
    {
        $config = Config::get('convertibles.abbreviations');

        $this->assertInternalType('array', $config);
    }
}