<?php

namespace App\Exceptions;

use Exception;
use Throwable;

/**
 * Class UncallableValueException
 * @package App\Exceptions
 */
class UncallableValueException extends Exception
{
    /**
     * UncallableValueException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        $message = '
            The passed value must be callable.
        ',
        $code = 0,
        Throwable $previous = null
    ){
        parent::__construct($message, $code, $previous);
    }
}
