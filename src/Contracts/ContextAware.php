<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that an object can accept contextual data.
 */
interface ContextAware
{
    /**
     * Set contextual data for this object.
     *
     * @param array<string, mixed> $context
     */
    public function setContext(array $context): void;
}