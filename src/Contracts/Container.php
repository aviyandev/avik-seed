<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Defines the contract for a dependency injection container.
 */
interface Container
{
    /**
     * Register a binding in the container.
     *
     * @param string $abstract
     * @param string|\Closure|null $concrete
     */
    public function bind(string $abstract, string|\Closure|null $concrete = null): void;

    /**
     * Register a shared (singleton) binding in the container.
     *
     * @param string $abstract
     * @param string|\Closure|null $concrete
     */
    public function singleton(string $abstract, string|\Closure|null $concrete = null): void;

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
     */
    public function has(string $abstract): bool;

    /**
     * Get a resolved instance from the container.
     *
     * @throws \Exception When the abstract is not bound
     */
    public function get(string $abstract): mixed;

    /**
     * Register an existing instance in the container.
     */
    public function instance(string $abstract, mixed $instance): void;
}