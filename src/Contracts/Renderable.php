<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Indicates that an object can be rendered into a string.
 *
 * Commonly used by Response objects, Views, etc.
 */
interface Renderable
{
    /**
     * Get the evaluated contents of the object as a string.
     */
    public function render(): string;
}