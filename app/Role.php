<?php

namespace App;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    /**
     * options
     *
     * @return void
     */
    public static function options()
    {
        return self::all()->pluck('name', 'name');
    }
}
