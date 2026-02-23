<?php

namespace Antistatique\Swisstopo\Tests;

use Antistatique\Swisstopo\SwisstopoConverter;
use Antistatique\Swisstopo\Tests\Traits\InvokeMethodTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
#[CoversClass(SwisstopoConverter::class)]
#[CoversMethod(SwisstopoConverter::class, 'degToSex')]
#[CoversMethod(SwisstopoConverter::class, 'degToSec')]
class SwisstopoConverterTests extends TestCase
{
    use InvokeMethodTrait;

    #[DataProvider('decimalDegreesToSexagesimalProvider')]
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
    public static function decimalDegreesToSexagesimalProvider(): iterable
    {
        yield [12.76389, 12.4550004];
    }

    #[DataProvider('decimalDegreesToSecondsOfArcProvider')]
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
    public static function decimalDegreesToSecondsOfArcProvider(): iterable
    {
        yield [1, 3600];
        yield [1.24, 5040];
        yield [360, 1.296e+6];
        yield [-12, -43200];
        yield ['1.24', 5040];
    }
}
