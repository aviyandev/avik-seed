<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that a component requires a boot phase.
 */
interface Bootable
{
    /**
     * Boot the component.
     */
    public function boot(): void;
}