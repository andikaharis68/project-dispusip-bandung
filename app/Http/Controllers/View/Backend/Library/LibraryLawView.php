<?php

namespace App\Http\Controllers\View\Backend\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibraryLawView extends Controller
{
    public function index()
    {
        return view('backend.library.law.index');
    }
}
