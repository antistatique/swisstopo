Convert World Coordinates to Swiss Coordinates - and vice versa
=============

[![Build Status](https://travis-ci.com/antistatique/swisstopo.svg?branch=dev)](https://travis-ci.com/antistatique/swisstopo)
[![StyleCI](https://github.styleci.io/repos/207270598/shield?branch=master)](https://github.styleci.io/repos/207270598)
[![Coverage Status](https://coveralls.io/repos/github/antistatique/swisstopo/badge.svg?branch=dev)](https://coveralls.io/github/antistatique/swisstopo?branch=dev)
[![Packagist](https://img.shields.io/packagist/dt/antistatique/swisstopo.svg?maxAge=2592000)](https://packagist.org/packages/antistatique/swisstopo)
[![License](https://poser.pugx.org/antistatique/swisstopo/license)](https://packagist.org/packages/antistatique/swisstopo)
[![PHP Versions Supported](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg)](https://packagist.org/packages/antistatique/swisstopo)

Super-simple PHP library to transpose GPS (WGS84) coordinates to/from the Swiss military and civilian coordinate
systems CH1903/LV03 (MN03) or CH1995/LV95 (MN95).

In this library, the approximate formulas have been used for the direct conversion of ellipsoidal WGS84 coordinates to
Swiss plane coordinates.

These formulas are primarily for navigation purposes and may not be used for official or geodetic survey applications!

Getting started
------------

You can install `swisstopo` using Composer:

```
composer require antistatique/swisstopo
```

Usage
--------

Convert GPS (WGS84) to Swiss (LV03 and LV95) coordinates - and vice versa.

### GPS (WGS84) to CH1903/LV03 (MN03)

```php
$swiss_converter = new Antistatique\Swisstopo\SwisstopoConverter();
$coordinates = $swiss_converter->fromWGSToMN03(46.462057617639, 6.8486736590762);
// Coordinates -> ['x' => 145807.4339423232, 'y' => 554679.5530031546].
```

### CH1903/LV03 (MN03) to GPS (WGS84)

```php
$swiss_converter = new Antistatique\Swisstopo\SwisstopoConverter();
$coordinates = $swiss_converter->fromMN03ToWGS(554680, 145807);
// Coordinates -> ['lat' => 46.462057617639346, 'long' => 6.848673659076181].
```

### GPS (WGS84) to CH1995/LV95 (MN95)

```php
$swiss_converter = new Antistatique\Swisstopo\SwisstopoConverter();
$coordinates = $swiss_converter->fromWGSToMN95(46.46312579498212, 6.8534397262208095);
// Coordinates -> ['east' => 2555046.5560538797, 'north' => 1145923.4267763223].
```

### CH1995/LV95 (MN95) to GPS (WGS84)

```php
$swiss_converter = new Antistatique\Swisstopo\SwisstopoConverter();
$coordinates = $swiss_converter->fromMN95ToWGS(2555047, 1145923);
// Coordinates -> ['lat' => 46.46312579498212,'long' => 6.8534397262208095]
```

Alternative
------------

### Open Source Repository

- [ValentinMinder/Swisstopo-WGS84-LV03](https://github.com/ValentinMinder/Swisstopo-WGS84-LV03) programmatic computer scripts to transpose GPS WGS-84 coordinates to/from the swiss military and civilian coordinate system (LV-03/CH-1903).
*Converter scripts in many languages: C, GO, Java, JavaScript, PHP, Python, R, SQL.*

- [idris-maps/swiss-projection](https://github.com/idris-maps/swiss-projection) Typescript library to convert from LV03(EPSG:21781) and LV95(EPSG:2056) to WGS84(EPSG:4326)
*Typescript library that supports both LV03 and LV95.*

- [hansroland/swissgeo](https://github.com/hansroland/swissgeo) Haskell library to transpose GPS (WGS84) coordinates to/from the Swiss military and civilian coordinate systems CH1903/LV03 (MN03) or CH1995/LV95 (MN95).
*Haskell library that supports both LV03 and LV95.*

### REST Services

- [REST web geoservices (REFRAME Web API)](https://www.swisstopo.admin.ch/en/maps-data-online/calculation-services/m2m.html). swisstopo offers different REST ("REpresentational State Transfer") services which allow you to embed coordinates transformations in your own software products or web services. *REST geoservices for reference frame changes WGS84-LV95-LV03/Bessel-LHN95-LN02*

### Online documentation & Converters

- [Reference systems](https://www.swisstopo.admin.ch/en/knowledge-facts/surveying-geodesy/reference-systems.html) of surveying geodesy.

- [NAVREF](https://www.swisstopo.admin.ch/en/maps-data-online/calculation-services/navref.html) allows you to transform Swiss projection coordinates into global WGS84 coordinates (GPS) and vice versa.
*It supports both LV03 and LV95.*

- [REFRAME](https://www.swisstopo.admin.ch/en/maps-data-online/calculation-services/reframe.html) allows you to perform coordinates transformations in planimetry and/or altimetry.
*Supported file formats: text with separator, LTOP, DXF, ESRI Shape, INTERLIS 1, Adalin OneOne, Topobase .K*

### Software & DLL

- [GIS tools and applications (FME)](https://shop.swisstopo.admin.ch/en/products/geo_software/GIS_info). swisstopo has developed transformers for the transition of reference frames in position an /or height with FME software. All files which can be read by the FME software (many GIS, CAD and text formats) can be easily processed with this transformer. The CHENyx06 dataset (LV03->LV95 ou LV03->ETRS89) is also available as NTv2 regular grid.

- [Developer resources (DLL / JAR)](https://shop.swisstopo.admin.ch/en/products/geo_software/DLL_info). Swisstopo provides shared libraries (DLL or JAR) for software developers which allows transformation of coordinates and heights. <br>These transformations can be easily integrated into existing applications (.NET, C++, Visual Basic, Java), websites (Java, MONO, Silverlight) or macros (e.g. VBA).

- [GeoSuite (REFRAME/TRANSINT)](https://shop.swisstopo.admin.ch/en/products/geo_software/GeoSuite_info) consists in a suite of calculation, file editing and data visualizing tools, grouped in one modern and efficient application. It is also optimized for the latest computers and operating systems.

Resources
------------

- [Approximate formulas for the transformation between Swiss projection coordinates and-WGS84](https://github.com/antistatique/swisstopo/blob/master/doc/ch1903wgs84_e.pdf) - (PDF, 4 pages, 72 KB, English).

- [Formulas and constants for the calculation of the Swiss conformal cylindrical projection and for the transformation between coordinate systems](https://github.com/antistatique/swisstopo/blob/master/doc/refsys_e.pdf) - (PDF, 20 pages, 428 KB, English) .
