<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * sales
     *
     * @return void
     */
    public function sales()
    {
        return view('reports.sales');
    }

    /**
     * purchase
     *
     * @return void
     */
    public function purchase()
    {
        return view('reports.purchase');
    }
}
