<?php

namespace App\Services;

use ReflectionClass;

class Container
{
    public static function make(string $className): object
    {
        $reflection = new ReflectionClass($className);
        $constructor = $reflection->getConstructor();

        if ($constructor === null) {
            return new $className;
        }

        $dependencies = [];

        foreach ($constructor->getParameters() as $dependency) {
            $type = $dependency->getType();

            if ($type && !$type->isBuiltin()) {
                $dependencies[] = self::make($type->getName());
            } else {
                throw new \Exception("Can't resolve dependency for {$dependency->getName()}");
            }
//            var_dump($type->getName());
        }

        return new $className(...$dependencies);
    }
}
