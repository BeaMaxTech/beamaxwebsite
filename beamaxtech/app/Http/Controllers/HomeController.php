<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = User::where("role_id",1)->get();

        switch(\Auth::user()->role_id){
            case 1:
                return view('home.staff.index',compact('students'));
                
            case 2:
                return view('home.staff.index',compact('students'));
                
            case 2:
                return view('home.staff.index',compact('students'));
                
        }
        
    }
}
