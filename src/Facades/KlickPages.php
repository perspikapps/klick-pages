<?php

namespace Perspikapps\KlickPages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Perspikapps\KlickPages\KlickPages
 */
class KlickPages extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Perspikapps\KlickPages\KlickPages::class;
    }
}
