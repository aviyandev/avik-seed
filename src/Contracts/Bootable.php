<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Bootable
 *
 * Defines a contract for components that require an initialization/booting phase.
 */
interface Bootable
{
    /**
     * Boot the component.
     *
     * @return void
     */
    public function boot(): void;
}
