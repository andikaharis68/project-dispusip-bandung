<?php

namespace App\Http\Controllers\Frontend\Profile;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class OrganizationalStructureController extends Controller
{
    public function index()
    {
        return view('/frontend/organizational-structure');
    }
}
