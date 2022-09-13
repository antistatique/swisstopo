<?php

namespace Antistatique\Swisstopo\Tests;

use Antistatique\Swisstopo\SwisstopoConverter;
use Antistatique\Swisstopo\Tests\Traits\InvokeMethodTrait;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Antistatique\Swisstopo\SwisstopoConverter
 */
class SwisstopoConverterWGSToMN03Tests extends TestCase
{
    use InvokeMethodTrait;

    /**
     * @covers ::fromMN03ToWGS
     */
    public function testFromMN03ToWGS(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $coordinates = $swiss_converter->fromMN03ToWGS(554680, 145807);
        $this->assertSame([
            'lat' => 46.462057617639346,
            'long' => 6.848673659076181,
        ], $coordinates);
    }

    /**
     * @covers ::fromWGSToMN03
     */
    public function testFromWGSToMN03(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $coordinates = $swiss_converter->fromWGSToMN03(46.462057617639, 6.8486736590762);
        $this->assertSame([
            'x' => 145807.4339423232,
            'y' => 554679.5530031546,
        ], $coordinates);
    }

    /**
     * @covers ::fromMN03ToWGSLatitude
     *
     * @throws \ReflectionException
     */
    public function testFromMN03ToWGSLatitude(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $latitude = $this->invokeMethod($swiss_converter, 'fromMN03ToWGSLatitude', [554680, 145807]);
        $this->assertEquals(46.462057617639, $latitude);
    }

    /**
     * @covers ::fromMN03ToWGSLongitude
     *
     * @throws \ReflectionException
     */
    public function testFromMN03ToWGSLongitude(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $longitude = $this->invokeMethod($swiss_converter, 'fromMN03ToWGSLongitude', [554680, 145807]);
        $this->assertEquals(6.8486736590762, $longitude);
    }

    /**
     * @covers ::fromWGSToMN03x
     *
     * @throws \ReflectionException
     */
    public function testFromWGSToMN03x(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $x = $this->invokeMethod($swiss_converter, 'fromWGSToMN03x', [46.462057617639, 6.8486736590762]);
        $this->assertEquals(145807.4339423232, $x);
    }

    /**
     * @covers ::fromWGSToMN03y
     *
     * @throws \ReflectionException
     */
    public function testFromWGSToMN03y(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $y = $this->invokeMethod($swiss_converter, 'fromWGSToMN03y', [46.462057617639, 6.8486736590762]);
        $this->assertEquals(554679.5530031546, $y);
    }
}
