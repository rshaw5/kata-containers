<?php

namespace App\Exceptions;

use Exception;
use Throwable;

/**
 * Class UnboundKeyException
 * @package App\Exceptions
 */
class UnboundKeyException extends Exception
{
    /**
     * UnboundKeyException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(
        $message = '
            The requested key-value pair is not bound to this container
        ',
        $code = 0,
        Throwable $previous = null
    ){
        parent::__construct($message, $code, $previous);
    }
}
