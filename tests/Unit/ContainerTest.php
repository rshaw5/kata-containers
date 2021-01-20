<?php

namespace Tests\Unit;

use App\Container;
use App\Example;
use App\Exceptions\UnboundKeyException;
use App\Exceptions\UncallableValueException;
use PHPUnit\Framework\TestCase;

/**
 * Class ContainerTest
 * @package Tests\Unit
 */
class ContainerTest extends TestCase
{
    /**
     * @test
     * @throws UnboundKeyException
     * @throws UncallableValueException
     */
    public function it_binds_and_resolves()
    {
        $container = new Container;
        $container->bind('App\Example', function() {
            return new Example;
        });
        $result = $container->resolve('App\Example');

        $this->assertEquals('success', $result->returnSuccess());
    }

    /** @test */
    public function it_throws_an_error_for_unbound_keys()
    {
        $container = new Container;
        $this->expectException(UnboundKeyException::class);
        $container->resolve('unbound-key');
    }

    /** @test */
    public function it_throws_an_error_for_uncallable_keys()
    {
        $container = new Container;
        $this->expectException(UncallableValueException::class);
        $container->bind('uncallable-binding', 'uncallable');
    }
}
