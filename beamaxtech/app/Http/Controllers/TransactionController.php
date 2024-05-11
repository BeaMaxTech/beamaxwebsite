<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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
            'user_id' => ['required', 'string'],

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

        $transaction = Transaction::create($request->all());

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
    public function expenses()
    {
        //
        $transactions = Transaction::where("type","expenses")->orderBy("id","Desc")->get();
        return View("home.expenses",compact('transactions'));
    }
    public function creatExpenses(Transaction $transaction)
    {
        //
        return View("home.add_expenses");
    }
    public function addExpenses(Request $request)
    {
        //

        //

        $validator = Validator::make($request->all(),[
            'description' => ['required', 'string', 'max:255'],
            'mode_of_payment' => ['required', 'string'],
            

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
        $request['user_id'] = Auth::user()->id;
        $request['type'] = "expenses";

        $transaction = Transaction::create($request->all());

      return redirect()->back()->with(['msg' => ' Created Successfully']);
    }
}
