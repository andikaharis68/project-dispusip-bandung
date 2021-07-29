<?php

namespace App\Http\Controllers\View\Backend\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibraryGalleryView extends Controller
{
    public function index()
    {
        return view('/backend/library/gallery/index');
    }
}
