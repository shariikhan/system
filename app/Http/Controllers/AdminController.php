<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\analysis;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public static function daily_query_counter($date){
        
        $counter = DB::table('analysis')->Where('created_time', 'like', $date)->get();
        return $wordCount = count($counter);
        

    }
}
