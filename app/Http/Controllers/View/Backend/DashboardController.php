<?php

namespace App\Http\Controllers\View\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/backend/index');
    }
}
