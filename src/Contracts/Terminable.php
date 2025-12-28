<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Terminable
 *
 * Indicates that an object can perform cleanup tasks after the response has been sent.
 */
interface Terminable
{
    /**
     * Terminate the request/response cycle.
     *
     * @param mixed $request
     * @param mixed $response
     * @return void
     */
    public function terminate(mixed $request, mixed $response): void;
}
