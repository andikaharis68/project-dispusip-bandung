<?php

namespace App\Http\Controllers\View\Backend\Archive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArchiveGalleryView extends Controller
{
    public function index()
    {
        return view('/backend/archive/gallery/index');
    }
}
