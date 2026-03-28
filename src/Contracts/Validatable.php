<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that an object can be validated.
 */
interface Validatable
{
    /**
     * Validate the object.
     *
     * @throws \Exception When validation fails
     */
    public function validate(): bool;

    /**
     * Get validation errors.
     *
     * @return array<string, string[]>
     */
    public function errors(): array;
}