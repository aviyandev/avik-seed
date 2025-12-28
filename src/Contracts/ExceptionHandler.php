<?php

declare(strict_types=1);

namespace Avik\Seed\Contracts;

/**
 * Interface ExceptionHandler
 *
 * Defines the contract for handling application exceptions.
 */
interface ExceptionHandler
{
    /**
     * Report or log an exception.
     *
     * @param \Throwable $e
     * @return void
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
     * Render an exception to the console.
     *
     * @param mixed $output
     * @param \Throwable $e
     * @return void
     */
    public function renderForConsole(mixed $output, \Throwable $e): void;
}
