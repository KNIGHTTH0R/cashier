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

    public function backup()
    {
        return view('reports.backup');
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
