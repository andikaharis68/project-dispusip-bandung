<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryGaleryController extends Controller
{
    public function index()
    {
        return view('/frontend/library-gallery');
    }
}
