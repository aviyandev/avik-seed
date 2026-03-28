<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that an object can be converted to an array.
 */
interface Arrayable
{
    /**
     * Get the instance as an array.
     *
     * @return array<string|int, mixed>
     */
    public function toArray(): array;
}