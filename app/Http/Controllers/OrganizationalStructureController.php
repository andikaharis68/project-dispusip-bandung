<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationalStructureController extends Controller
{
    public function index()
    {
        return view('/frontend/organizational-structure');
    }
}
