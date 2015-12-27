<?php
/**
 * @package php-tmdb\laravel
 * @author Mark Redeman <markredeman@gmail.com>
 * @copyright (c) 2014, Mark Redeman
 */
namespace Tmdb\Laravel\Adapters\Tests;

use Tmdb\Laravel\Adapters\EventDispatcherLaravel4 as AdapterDispatcher;

class EventDispatcherTestLaravel4 extends AbstractEventDispatcherTest
{
    protected function createEventDispatcher()
    {
        $this->laravel = $this->prophesize('Illuminate\Events\Dispatcher');
        $this->symfony = $this->prophesize('Symfony\Component\EventDispatcher\EventDispatcher');

        return new AdapterDispatcher(
            $this->laravel->reveal(),
            $this->symfony->reveal()
        );
    }
}