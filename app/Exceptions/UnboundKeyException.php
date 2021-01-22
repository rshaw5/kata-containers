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
    // Per a discussion with Steve, this will work because 
    // it will be passed to the constructor automatically.
    public $message = 'The requested key-value pair is not bound to this container.';
}
