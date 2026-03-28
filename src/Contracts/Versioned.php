<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that a component can report its version.
 */
interface Versioned
{
    /**
     * Get the version of this component.
     */
    public function version(): string;
}