<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalTargetController extends Controller
{
    public function index()
    {
        return view('/frontend/goal');
    }
}
