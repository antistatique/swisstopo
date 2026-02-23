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
#[CoversMethod(SwisstopoConverter::class, 'fromMN95ToWGS')]
#[CoversMethod(SwisstopoConverter::class, 'fromWGSToMN95')]
#[CoversMethod(SwisstopoConverter::class, 'fromWGSToMN95East')]
#[CoversMethod(SwisstopoConverter::class, 'fromWGSToMN95North')]
#[CoversMethod(SwisstopoConverter::class, 'fromMN95ToWGSLatitude')]
#[CoversMethod(SwisstopoConverter::class, 'fromMN95ToWGSLongitude')]
class SwisstopoConverterWGSToMN95Tests extends TestCase
{
    use InvokeMethodTrait;

    public function testFromMN95ToWGS(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $coordinates = $swiss_converter->fromMN95ToWGS(2555047, 1145923);
        $this->assertEqualsWithDelta(46.463125794982, $coordinates['lat'], 0.0001);
        $this->assertEqualsWithDelta(6.8534397262208, $coordinates['long'], 0.0001);
    }

    public function testFromWGSToMN95(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $coordinates = $swiss_converter->fromWGSToMN95(46.46312579498212, 6.8534397262208095);
        $this->assertSame([
            'east' => 2555046.5560538797,
            'north' => 1145923.4267763223,
        ], $coordinates);
    }

    public function testFromWGSToMN95East(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $east = $this->invokeMethod($swiss_converter, 'fromWGSToMN95East', [46.463125794982, 6.8534397262208]);
        $this->assertEquals(2555046.556053879, $east);
        $this->assertEquals(2555047, round($east));
    }

    public function testFomWGSToMN95North(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $north = $this->invokeMethod($swiss_converter, 'fromWGSToMN95North', [46.463125794982, 6.8534397262208]);
        $this->assertEquals(1145923.4267763097, $north);
        $this->assertEquals(1145923, round($north));
    }

    public function testFromMN95ToWGSLatitude(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $latitude = $this->invokeMethod($swiss_converter, 'fromMN95ToWGSLatitude', [2555047, 1145923]);
        $this->assertEqualsWithDelta(46.463125794982, $latitude, 0.0001);
    }

    public function testFromMN95ToWGSLongitude(): void
    {
        $swiss_converter = new SwisstopoConverter();
        $longitude = $this->invokeMethod($swiss_converter, 'fromMN95ToWGSLongitude', [2555047, 1145923]);
        $this->assertEqualsWithDelta(6.8534397262208, $longitude, 0.0001);
    }
}
