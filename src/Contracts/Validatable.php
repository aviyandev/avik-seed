<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Validatable
 *
 * Indicates that an object can be validated against a set of rules.
 */
interface Validatable
{
    /**
     * Validate the object.
     *
     * @return bool
     * @throws \Exception If validation fails
     */
    public function validate(): bool;

    /**
     * Get the validation errors.
     *
     * @return array<string, string[]>
     */
    public function errors(): array;
}
