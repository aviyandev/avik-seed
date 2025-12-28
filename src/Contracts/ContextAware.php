<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface ContextAware
 *
 * Indicates that an object can receive and handle contextual data.
 */
interface ContextAware
{
    /**
     * Set the context for the object.
     *
     * @param array<string, mixed> $context
     * @return void
     */
    public function setContext(array $context): void;
}
