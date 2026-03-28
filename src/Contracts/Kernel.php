<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * The core application kernel contract.
 *
 * The kernel is responsible for bootstrapping the application and handling requests.
 */
interface Kernel
{
    /**
     * Bootstrap the application.
     */
    public function bootstrap(): void;

    /**
     * Handle an incoming request and return a response.
     *
     * @param mixed $request
     * @return mixed
     */
    public function handle(mixed $request): mixed;

    /**
     * Perform any final cleanup after the response has been sent.
     *
     * @param mixed $request
     * @param mixed $response
     */
    public function terminate(mixed $request, mixed $response): void;
}