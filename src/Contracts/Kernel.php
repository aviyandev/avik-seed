<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Kernel
 *
 * The core engine that handles an incoming request and returns a response.
 */
interface Kernel
{
    /**
     * Bootstrap the application.
     *
     * @return void
     */
    public function bootstrap(): void;

    /**
     * Handle an incoming request.
     *
     * @param mixed $request
     * @return mixed
     */
    public function handle(mixed $request): mixed;

    /**
     * Terminate the request/response cycle.
     *
     * @param mixed $request
     * @param mixed $response
     * @return void
     */
    public function terminate(mixed $request, mixed $response): void;
}
