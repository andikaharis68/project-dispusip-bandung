<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveGaleryController extends Controller
{
    public function index()
    {
        return view('/frontend/archive-galery');
    }
}
