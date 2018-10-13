<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * options
     *
     * @return void
     */
    public function options()
    {
        $options = Customer::options();
        return self::response(true, 'success', $options);
    }
}
