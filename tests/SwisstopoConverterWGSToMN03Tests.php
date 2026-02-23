<?php

namespace Antistatique\Swisstopo\Tests;

use Antistatique\Swisstopo\SwisstopoConverter;
use Antistatique\Swisstopo\Tests\Traits\InvokeMethodTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
#[CoversClass(SwisstopoConverter::class)]
#[CoversMethod(SwisstopoConverter::class, 'fromMN03ToWGS')]
#[CoversMethod(SwisstopoConverter::class, 'fromWGSToMN03')]
#[CoversMethod(SwisstopoConverter::class, 'fromMN03ToWGSLatitude')]
#[CoversMethod(SwisstopoConverter::class, 'fromMN03ToWGSLongitude')]
#[CoversMethod(SwisstopoConverter::class, 'fromWGSToMN03x')]
#[CoversMethod(SwisstopoConverter::class, 'fromWGSToMN03y')]
class SwisstopoConverterWGSToMN03Tests extends TestCase
{
    use InvokeMethodTrait;

    public function testFromMN03ToWGS(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $coordinates = $swiss_converter->fromMN03ToWGS(554680, 145807);
        $this->assertEqualsWithDelta(46.462057617639, $coordinates['lat'], 0.0001);
        $this->assertEqualsWithDelta(6.8486736590762, $coordinates['long'], 0.0001);
    }

    public function testFromWGSToMN03(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $coordinates = $swiss_converter->fromWGSToMN03(46.462057617639, 6.8486736590762);
        $this->assertSame([
            'x' => 145807.4339423232,
            'y' => 554679.5530031546,
        ], $coordinates);
    }

    public function testFromMN03ToWGSLatitude(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $latitude = $this->invokeMethod($swiss_converter, 'fromMN03ToWGSLatitude', [554680, 145807]);
        $this->assertEqualsWithDelta(46.462057617639, $latitude, 0.0001);
    }

    public function testFromMN03ToWGSLongitude(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $longitude = $this->invokeMethod($swiss_converter, 'fromMN03ToWGSLongitude', [554680, 145807]);
        $this->assertEqualsWithDelta(6.8486736590762, $longitude, 0.0001);
    }

    public function testFromWGSToMN03x(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $x = $this->invokeMethod($swiss_converter, 'fromWGSToMN03x', [46.462057617639, 6.8486736590762]);
        $this->assertEquals(145807.4339423232, $x);
    }

    public function testFromWGSToMN03y(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $y = $this->invokeMethod($swiss_converter, 'fromWGSToMN03y', [46.462057617639, 6.8486736590762]);
        $this->assertEquals(554679.5530031546, $y);
    }
}
