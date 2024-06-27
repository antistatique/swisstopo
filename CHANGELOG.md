# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Removed
- remove styleCI integration in favor of Github Actions and linters

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

[Unreleased]: https://github.com/antistatique/swisstopo/compare/1.0.0...HEAD
[1.0.0]: https://github.com/antistatique/swisstopo/compare/0.0.1...1.0.0
[0.0.1]: https://github.com/antistatique/swisstopo/compare/0.0.1-alpha...v0.0.1
[0.0.1-alpha]: https://github.com/antistatique/swisstopo/releases/tag/0.0.1-alpha
