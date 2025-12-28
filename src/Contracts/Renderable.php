<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface Renderable
 *
 * Indicates that an object can be rendered to a string (e.g., HTML, JSON).
 */
interface Renderable
{
    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render(): string;
}
