<?php

declare(strict_types=1);

namespace Illuminate\Container;

class Container
{
    /**
     * @template T of object
     *
     * @psalm-param class-string<T> $abstract
     *
     * @psalm-return T
     */
    public function make($abstract = null, array $parameters = []): object {}
}