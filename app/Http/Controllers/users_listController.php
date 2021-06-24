<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\naics_risk;
use App\umbrella_slab;
use App\users;
use App\role_user;
use App\roles;
use App\analysis;
use DB;

class users_listController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {


       $users_list = users::where('users.id', '!=', '')->join('role_user', 'role_user.user_id', '=', 'users.id')->join('roles', 'roles.id', '=', 'role_user.role_id')->get();


        return view('admin.users_list', compact('users_list'));   

    }



    

    
}
