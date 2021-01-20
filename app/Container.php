<?php


namespace App;


use App\Exceptions\UnboundKeyException;
use App\Exceptions\UncallableValueException;

/**
 * Class Container
 * @package App
 */
class Container
{
    /**
     * @var array
     */
    protected array $bindings = [];

    /**
     * @param $key
     * @param $value
     * @throws UncallableValueException
     */
    public function bind($key, $value){
        if(!is_callable($value)){
            throw new UncallableValueException;
        }

        $this->bindings[$key] = $value;
    }

    /**
     * @param $key
     * @return object
     * @throws UnboundKeyException
     */
    public function resolve($key): object {
        if (!key_exists($key, $this->bindings)){
            throw new UnboundKeyException();
        }

        return call_user_func($this->bindings[$key]);
    }
}
