<?php

namespace App\Http\Controllers\Frontend\Profile;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class ActivityDinasController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.activity-dinas');
    }
}
