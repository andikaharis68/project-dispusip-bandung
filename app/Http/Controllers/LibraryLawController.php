<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryLawController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.archive-law');
    }
}
