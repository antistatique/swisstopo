## Submitting issues

Please read the below before posting an issue. Thank you!

If, you think you've found a bug, or would like to discuss a change or improvement, feel free to raise an issue.

## Pull requests

This is a fairly simple converter, but it has been made much better by contributions from those using it.
If you'd like to suggest an improvement, please raise an issue to discuss it before making your pull request.

Pull requests for bugs are more than welcome - please explain the bug you're trying to fix in the message.

## Developing

## 🚔 Check Symfony 4 coding standards & best practices

You need to run composer before using [FriendsOfPHP/PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

### Ensure PHP Community Best Practicies using PHP Coding Standards Fixer

It can modernize your code (like converting the pow function to the ** operator on PHP 5.6) and (micro) optimize it.

```bash
./vendor/bin/php-cs-fixer fix --dry-run --format=checkstyle
```

### Attempts to dig into your program and find as many type-related bugs as possiblevia Psalm

```bash
./vendor/bin/psalm
```

### Catches whole classes of bugs even before you write tests using PHPStan

```bash
./vendor/bin/phpstan analyse ./ --error-format=checkstyle
```

<!-- ### Asserts Security Vulnerabilities

The [SensioLabs Security Checker](https://github.com/sensiolabs/security-checker) is a command line tool that checks
if the application uses dependencies with known security vulnerabilitie.

```bash
./vendor/bin/security-checker security:check ./composer.lock
``` -->

### Improve global code quality using PHPCPD (Code duplication) &  PHPMD (PHP Mess Detector)

Detect overcomplicated expressions & Unused parameters, methods, properties

```bash
./vendor/bin/phpmd ./ text ./phpmd.xml --suffixes php,inc,test --exclude vendor,bin,tests
```

Copy/Paste Detector

```bash
./vendor/bin/phpcpd ./ --names=*.php,*.inc,*.test --names-exclude=*.md --ansi --exclude=vendor --exclude=bin --exclude=tests
```

### Checks compatibility with PHP interpreter versions

```bash
./vendor/bin/phpcf --target 7.3 --file-extensions php,inc,test ./
```

### Enforce code standards with git hooks

Maintaining code quality by adding the custom post-commit hook to yours.

```bash
cat ./bin/post-commit >> ./.git/hooks/post-commit
```
