<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * options
     *
     * @return void
     */
    public function options()
    {
        $options = Product::options();
        return self::response(true, 'success', $options);
    }
}
