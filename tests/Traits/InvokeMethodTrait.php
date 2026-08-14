<?php

declare(strict_types=1);

namespace Antistatique\Swisstopo\Tests\Traits;

/**
 * Provides a function to invoke protected/private methods of a class.
 */
trait InvokeMethodTrait
{
    /**
     * Calls protected/private method of a class.
     *
     * @param array<int, mixed> $parameters
     *
     * @throws \ReflectionException
     */
    protected function invokeMethod(object $object, string $methodName, array $parameters = []): mixed
    {
        $method = new \ReflectionMethod($object, $methodName);

        return $method->invokeArgs($object, $parameters);
    }

    /**
     * Calls protected/private method of a class expected to return a float.
     *
     * @param array<int, mixed> $parameters
     *
     * @throws \ReflectionException
     */
    protected function invokeFloatMethod(object $object, string $methodName, array $parameters = []): float
    {
        $value = $this->invokeMethod($object, $methodName, $parameters);

        if (!\is_float($value)) {
            self::fail(\sprintf('Expected %s() to return a float, got %s.', $methodName, \get_debug_type($value)));
        }

        return $value;
    }
}
