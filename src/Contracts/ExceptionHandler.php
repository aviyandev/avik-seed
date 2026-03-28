<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Contract for handling application exceptions.
 */
interface ExceptionHandler
{
    /**
     * Report or log the exception.
     */
    public function report(\Throwable $e): void;

    /**
     * Render an exception into an HTTP response.
     *
     * @param mixed $request
     * @param \Throwable $e
     * @return mixed
     */
    public function render(mixed $request, \Throwable $e): mixed;

    /**
     * Render an exception for console output.
     *
     * @param mixed $output
     * @param \Throwable $e
     */
    public function renderForConsole(mixed $output, \Throwable $e): void;
}