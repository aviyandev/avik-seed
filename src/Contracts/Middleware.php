<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

use Closure;

/**
 * Contract for HTTP middleware.
 */
interface Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param mixed $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(mixed $request, Closure $next): mixed;
}