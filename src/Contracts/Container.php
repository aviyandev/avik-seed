<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Container
 *
 * Defines the contract for a dependency injection container.
 */
interface Container
{
    /**
     * Register a binding with the container.
     *
     * @param string $abstract
     * @param string|\Closure $concrete
     * @return void
     */
    public function bind(string $abstract, string|\Closure $concrete): void;

    /**
     * Register a shared binding in the container.
     *
     * @param string $abstract
     * @param string|\Closure $concrete
     * @return void
     */
    public function singleton(string $abstract, string|\Closure $concrete): void;

    /**
     * Resolve the given type from the container.
     *
     * @param string $abstract
     * @param array<string|int, mixed> $parameters
     * @return mixed
     */
    public function make(string $abstract, array $parameters = []): mixed;

    /**
     * Determine if the given abstract type has been bound.
     *
     * @param string $abstract
     * @return bool
     */
    public function has(string $abstract): bool;

    /**
     * Get the container's bound instance for the given abstract type.
     *
     * @param string $abstract
     * @return mixed
     */
    public function get(string $abstract): mixed;
}
