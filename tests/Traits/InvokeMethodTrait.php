<?php

namespace Antistatique\Swisstopo\Tests\Traits;

/**
 * Provides a function to invoke protected/private methods of a class.
 */
trait InvokeMethodTrait
{
    /**
     * Calls protected/private method of a class.
     *
     * @param object &$object
     *                                     Instantiated object that we will run method on
     * @param string $method_name
     *                                     Method name to call
     * @param array  $parameters
     *                                     Array of parameters to pass into method
     * @param array  $protected_properties
     *                                     Array of values that should be set on protected properties
     *
     * @return mixed
     *   Method return
     *
     * @throws \ReflectionException
     */
    protected function invokeMethod(&$object, $method_name, array $parameters = [], array $protected_properties = [])
    {
        $reflection = new \ReflectionClass(\get_class($object));

        foreach ($protected_properties as $property => $value) {
            $property = $reflection->getProperty($property);
            $property->setAccessible(true);
            $property->setValue($object, $value);
        }

        $method = $reflection->getMethod($method_name);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }
}
