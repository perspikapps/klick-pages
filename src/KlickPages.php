<?php

namespace Perspikapps\KlickPages;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Route;
use Orbit\Concerns\Orbital;

class KlickPages extends Model
{
    use Orbital;

    protected $guarded = [];

    protected static ?string $module = null;

    public static function schema(Blueprint $table)
    {
        $table->string('slug');
        $table->string('title');
        $table->string('password')->nullable();
        $table->longText('content');
    }

    public function getKeyName()
    {
        return 'slug';
    }

    public function getIncrementing()
    {
        return false;
    }

    public static function routes($namespace = null): \Illuminate\Routing\Route
    {
        return Route::get($namespace.'/{page}', function ($page) use ($namespace) {
            return app()->makeWith(KlickPagesController::class, ['namespace' => $namespace ?? static::$module])->view($page);
        })->name(($namespace ? $namespace.'.' : '').'pages');
    }
}
