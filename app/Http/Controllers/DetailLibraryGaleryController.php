<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailLibraryGaleryController extends Controller
{
    public function index()
    {
        return view('/frontend/detail-library-gallery');
    }
}
