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
}
