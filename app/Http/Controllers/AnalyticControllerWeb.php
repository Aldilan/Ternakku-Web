<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyticControllerWeb extends Controller
{
    public function index()
    {
        return view('modules.analytic.index');
    }
}
