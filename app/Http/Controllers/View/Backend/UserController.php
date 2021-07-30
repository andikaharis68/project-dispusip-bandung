<?php

namespace App\Http\Controllers\View\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('web', ["except" => ["login"]]);
    }
    public function index()
    {
        return view('/backend/users/list/index');
    }

    public function detail()
    {
        return view('/backend/users/detail/detail');
    }
}
