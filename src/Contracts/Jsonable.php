<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that an object can be converted to JSON.
 */
interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param int $options JSON encoding options
     */
    public function toJson(int $options = 0): string;
}