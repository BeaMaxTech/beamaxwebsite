<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id = null)
    {
        //
        if($id != null){
            $user =  User::find($id);
        return View("home.add_payment", compact('user'));
    }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //

        $validator = Validator::make($request->all(),[
            'description' => ['required', 'string', 'max:255'],
            'mode_of_payment' => ['required', 'string'],
            'user_id' => ['required', 'string', 'min:8', 'confirmed'],

            'amount' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],

            
            
            
        ]);

        

        

      

      if ($validator->fails())
       
      {
        // pass validator object in withErrors method & also withInput it should be null by default
         return redirect()->back()->withErrors($validator)->withInput();
      }
        $user = User::find($request->user_id);

        $request['staff_id'] = Auth::user()->id;

        $transaction = Transcation::create($user->all());

      return redirect()->back()->with(['msg' => ' Created Successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
