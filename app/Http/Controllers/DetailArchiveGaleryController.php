<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailArchiveGaleryController extends Controller
{
    public function index()
    {
        return view('/frontend/detail-archive-galery');
    }
}
