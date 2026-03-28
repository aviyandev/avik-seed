<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface for service providers that can be deferred (lazy-loaded).
 *
 * A deferrable provider will only be booted when one of the services it provides
 * is actually resolved from the container.
 */
interface DeferrableServiceProvider extends ServiceProvider
{
    /**
     * Get the services provided by this provider.
     *
     * @return array<int, string> List of service class names or identifiers
     */
    public function provides(): array;
}