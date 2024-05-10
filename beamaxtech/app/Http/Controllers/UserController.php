<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Auth;

class UserController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::where("role_id",1)->get();

        return view("home.staff.students",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("home.staff.add_student");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(),[
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'amount_paid' => ['required', 'string', 'max:255'],
            'total_amount' => ['required', 'string', 'max:255'],

            'guidiance_phone' => ['required', 'string', 'max:255'],
            'guidiance_name' => ['required', 'string', 'max:255'],
            
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            
            'gender' => ['required', 'string', 'max:255'],
            'courses' => ['required', 'string', 'max:255'],
            'num_courses' => ['required', 'string', 'max:255'],
            'advert_method' => ['required', 'string', 'max:255'],
            'receipt_id' => ['required', 'string', 'max:255'],
            
            
        ]);

        

        

      

      if ($validator->fails())
       
      {
        // pass validator object in withErrors method & also withInput it should be null by default
         return redirect()->back()->withErrors($validator)->withInput();
      }
      $date = new Date();

      $user = User::create($user->all());
      


      $user->user_id = "BMI/S/".str_pad($user->id, 3, "0", STR_PAD_LEFT);
      $user->role = "student";
      $user->role_id = 1;
      $user->save();
      
      return redirect()->back()->with(['msg' => 'Employee Created Successul']);



    }

    /**
     * Display the specified resource.
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expenses $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
