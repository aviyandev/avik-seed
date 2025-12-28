<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Arrayable
 *
 * Indicates that an object can be converted to an array representation.
 */
interface Arrayable extends Jsonable
{
    /**
     * Get the instance as an array.
     *
     * @return array<string|int, mixed>
     */
    public function toArray(): array;
}
