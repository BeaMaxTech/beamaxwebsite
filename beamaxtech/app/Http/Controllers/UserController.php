<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


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

            
            'amount' => ['required', 'string', 'max:255'],
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


      $date = Carbon::now();
      $date_arr = $date->toArray();

      $year = substr($date_arr['year'],2,4);
      $month = ($date_arr['month']);
      
  

      $user = User::create([
        'fullname' => $request['fullname'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),

        'total_amount' =>  $request['total_amount'],

            'guidiance_phone' =>  $request['guidiance_phone'],
            'guidiance_name' =>  $request['guidiance_name'],
            
            'address' => $request['address'],
            'phone' =>  $request['phone'],
            'state' =>  $request['state'],


            'gender' =>  $request['gender'],
            'courses' =>  $request['courses'],
            'num_courses' =>  $request['num_courses'],
            'advert_method' =>  $request['advert_method'],


      ]);
      


      $user->user_id =  "BMI/S/".$year."/".$month."/".str_pad( $user->id, 3, "0", STR_PAD_LEFT);
      $user->role = "student";
      $user->role_id = 1;
      $user->save();

      $transactions =  Transaction::create([
        "user_id"=>$user->id,
        "amount"=>$request['amount'],
        "receipt_id"=>$request['receipt_id'],
        "type"=>"deposit",
        "description"=>"first pament",
        "mode_of_payment"=>$request['mode_of_payment'],
        "staff_id" => Auth::user()->id
        
      ]);
      
      return redirect()->back()->with(['msg' => 'Student Created Successul']);



    }

    /**
     * Display the specified resource.
     */
    public function show(User $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }


    public function transactions($id)
    {
        //
        $user = User::find($id);
        $transactions = Transaction::where("user_id",$id)->orderBy("id","desc")->get();
        return View("home.user_transaction", compact("user","transactions"));
    }
}
