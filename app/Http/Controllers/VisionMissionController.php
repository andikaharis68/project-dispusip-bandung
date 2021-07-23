<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisionMissionController extends Controller
{
    public function index()
    {
        return view('/frontend/vision-mission');
    }
}
