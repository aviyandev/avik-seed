<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Middleware
 *
 * Defines a contract for intercepting and manipulating requests and responses.
 */
interface Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param mixed $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(mixed $request, \Closure $next): mixed;
}
