<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveLawController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.archive-law');
    }
}
