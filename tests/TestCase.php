<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @param null $user
     * @param null $guard
     * @return $this
     */
    protected function signIn($user = null, $guard = null)
    {
        $this->be($user ?: factory('App\User')->create(), $guard);
        return $this;
    }
}
