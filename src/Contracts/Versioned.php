<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Versioned
 *
 * Indicates that a component can report its version.
 */
interface Versioned
{
    /**
     * Get the version of the component.
     *
     * @return string
     */
    public function version(): string;
}
