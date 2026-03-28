<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that a component supports termination logic.
 *
 * Useful for middleware, kernels, or services that need to perform
 * cleanup tasks after the response has been sent to the client.
 */
interface Terminable
{
    /**
     * Terminate the request/response lifecycle.
     *
     * @param mixed $request
     * @param mixed $response
     */
    public function terminate(mixed $request, mixed $response): void;
}