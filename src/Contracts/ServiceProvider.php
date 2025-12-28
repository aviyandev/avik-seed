<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface ServiceProvider
 *
 * Defines the contract for framework service providers which register and boot services.
 */
interface ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void;
}
