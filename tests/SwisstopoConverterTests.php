<?php

namespace Antistatique\Swisstopo\Tests;

use Antistatique\Swisstopo\SwisstopoConverter;
use Antistatique\Swisstopo\Tests\Traits\InvokeMethodTrait;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Antistatique\Swisstopo\SwisstopoConverter
 */
class SwisstopoConverterTests extends TestCase
{
    use InvokeMethodTrait;

    /**
     * @covers ::degToSex
     *
     * @dataProvider decimalDegreesToSexagesimalProvider
     *
     * @throws \ReflectionException
     */
    public function testDegToSex($degrees, $expected): void
    {
        $swiss_converter = new SwisstopoConverter();
        $sexagesimal = $this->invokeMethod($swiss_converter, 'degToSex', [$degrees]);
        $this->assertEquals($expected, $sexagesimal);
    }

    /**
     * Collection of Decimal Degrees notation converted to Sexagesimal notation.
     *
     * @return array
     *   The collection of input and expected converted value
     */
    public function decimalDegreesToSexagesimalProvider()
    {
        return [
        [12.76389, 12.4550004],
      ];
    }

    /**
     * @covers ::degToSec
     *
     * @dataProvider decimalDegreesToSecondsOfArcProvider
     *
     * @throws \ReflectionException
     */
    public function testDegToSec($degrees, $expected): void
    {
        $swiss_converter = new SwisstopoConverter();
        $seconds = $this->invokeMethod($swiss_converter, 'degToSec', [$degrees]);
        $this->assertEquals($expected, $seconds);
    }

    /**
     * Collection of Decimal Degrees notation converted to Seconds of Arc.
     *
     * @return array
     *   The collection of input and expected converted value
     */
    public function decimalDegreesToSecondsOfArcProvider()
    {
        return [
        [1, 3600],
        [1.24, 5040],
        [360, 1.296e+6],
        [-12, -43200],
        ['1.24', 5040],
      ];
    }
}
