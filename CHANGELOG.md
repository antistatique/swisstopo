# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.2.1] - 2026-08-14
### Fixed
- ci(workflows): run tests and code styles on pull requests, including those opened from a fork
- ci(phpstan): analyse the tests instead of excluding them through patterns that never matched

### Changed
- ci(workflows): cancel superseded workflow runs on the same branch
- ci(dependabot): fix composer updates never being proposed
- refactor(types): declare array shapes on the converter return types
- ci(phpstan): raise the analysis level from 1 to 10
- test(types): type the data provider parameters of the converter tests
- test(traits): add invokeFloatMethod() to assert the return type of the invoked method

## [1.2.0] - 2026-04-30
### Removed
- build(php): removed support PHP 8.3

### Security
- update(phpunit): phpunit/phpunit (12.5.14 => 12.5.23)
- update(linter): friendsofphp/php-cs-fixer (v3.94.2 => v3.95.1)
- update(linter): vimeo/psalm (6.15.1 => 6.16.1)
- test(update): upgrade phpunit/phpunit (12.5.23 => 13.1.7)

## [1.1.0] - 2026-02-23
### Added
- add tests coverage for PHP 8.5
- upgrade vimeo/psalm (4.30.0 = => 6.15.1)

### Removed
- removed support PHP 8.0
- removed support PHP 8.1
- removed support PHP 8.2
- remove phpcpd as abandoned
- remove unused php-mock/php-mock-phpunit

### Security
- upgrade phpstan/phpstan (0.12.100 => 2.1.39)
- upgrade phpunit/php-code-coverage (9.2.32 => 12.5.3)
- upgrade phpunit/phpunit (9.6.34 => 12.5.14)

### Changed
- remove deprecated usage of ReflectionProperty::setAccessible since PHP8.1

## [1.0.2] - 2025-06-03
### Added
- add tests coverage for PHP 8.4

## [1.0.1] - 2025-05-01
### Removed
- remove styleCI integration in favor of Github Actions and linters

### Added
- add tests on PHP 8.4

## [1.0.0] - 2024-06-24
### Added
- add dependabot
- add tests on PHP 8.3

### Removed
- remove sensiolabs/security-checker from direct dependency

### Security
- update friendsofphp/php-cs-fixer (v3.4.0 => v3.21.1)

## [0.0.1] - 2023-07-12
### Fixed
- fixed deprecations for development
- fixed deprecations for PHP 8.1

### Changed
- update changelog following 'keep a changelog' format
- run code-styles Github Actions on PHP 8.1
- update symfony checker to use new symfonycorp/security-checker-action
- use assertion with Delta on PHPUnit float values

### Added
- add run of tests on Github Actions
- add coverage to coveralls

### Removed
- remove Travis integration for tests
- remove StyleCI integration
- remove support for PHP 7.4

## [0.0.1-alpha] - 2020-06-12
### Added
- allow conversion of GPS (WGS84) coordinates from/to CH1903/LV03 (MN03)
- allow conversion of GPS (WGS84) coordinates from/to CH1995/LV95 (MN95)

[Unreleased]: https://github.com/antistatique/swisstopo/compare/1.2.1...HEAD
[1.2.1]: https://github.com/antistatique/swisstopo/compare/1.2.0...1.2.1
[1.2.0]: https://github.com/antistatique/swisstopo/compare/1.1.0...1.2.0
[1.1.0]: https://github.com/antistatique/swisstopo/compare/1.0.2...1.1.0
[1.0.2]: https://github.com/antistatique/swisstopo/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/antistatique/swisstopo/compare/1.0.0...1.0.1
[1.0.0]: https://github.com/antistatique/swisstopo/compare/0.0.1...1.0.0
[0.0.1]: https://github.com/antistatique/swisstopo/compare/0.0.1-alpha...v0.0.1
[0.0.1-alpha]: https://github.com/antistatique/swisstopo/releases/tag/0.0.1-alpha
