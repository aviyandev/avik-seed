<?php

declare(strict_types=1);

namespace Avik\Seed;

use Avik\Seed\Contracts\ServiceProvider;

/**
 * Class SeedServiceProvider
 *
 * Base service provider for the Avik Seed package.
 */
class SeedServiceProvider implements ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // Intentionally empty. Subclasses or other packages should implement
        // registration logic for core services.
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Intentionally empty.
    }
}
