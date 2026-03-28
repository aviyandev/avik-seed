<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Defines the contract for service providers.
 *
 * Service providers are responsible for registering services into the container
 * and performing any bootstrapping logic after registration.
 */
interface ServiceProvider
{
    /**
     * Register any application services into the container.
     */
    public function register(): void;

    /**
     * Bootstrap any application services.
     *
     * This method is called after all providers have been registered.
     */
    public function boot(): void;
}