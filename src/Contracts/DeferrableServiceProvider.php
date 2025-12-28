<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface DeferrableServiceProvider
 *
 * Indicates that a service provider should only be loaded when one of its services is requested.
 */
interface DeferrableServiceProvider extends ServiceProvider
{
    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array;
}
