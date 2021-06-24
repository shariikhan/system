<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //return view('admin.profile', compact('id'));
    }

    public function index($id = null)
    {
        return view('admin.profile', compact('id'));
    }

    
}
