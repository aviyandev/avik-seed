<?php

declare(strict_types=1);

namespace Avik\Seed;

use Avik\Seed\Contracts\ServiceProvider;

/**
 * Base service provider for the Avik framework.
 *
 * This class serves as a convenient base for other service providers.
 * All core and package service providers should extend this class.
 */
abstract class SeedServiceProvider implements ServiceProvider
{
    /**
     * Register any application services.
     *
     * Override this method in concrete providers to bind services into the container.
     */
    public function register(): void
    {
        // Intentionally empty - to be implemented by child classes
    }

    /**
     * Bootstrap any application services.
     *
     * Override this method in concrete providers for post-registration logic.
     */
    public function boot(): void
    {
        // Intentionally empty - to be implemented by child classes
    }
}