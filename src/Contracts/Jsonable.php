<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Jsonable
 *
 * Indicates that an object can be converted to a JSON string.
 */
interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param int $options
     * @return string
     */
    public function toJson(int $options = 0): string;
}
