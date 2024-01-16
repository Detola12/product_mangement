<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $users = DB::table('customers')->get();


        return view('users', compact('users'));
    }

    public function create(Request $request){
        Customer::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'phone_number' => $request->phone,
        ]);



        return redirect()->back()->with('status','Customer added successfully');
    }

    public function edit($id,Request $request){
        $customer = Customer::find($id);
        if (!$request->first_name){
            if(!$request->last_name){
                if(!$request->email){
                    if(!$request->phone){
                        return redirect()->back();
                    }
                    else{
                        $customer->phone_number = $request->phone;
                    }
                }
                else{
                    $customer->email = $request->email;
                }
            }
            else{
                $customer->last_name = $request->lname;
                dd('h');
            }
        }
        else{
            $customer->first_name = $request->fname;
        }

        return redirect()->back()->with('status', 'Edited Successfully');
    }

    public function delete($id){
        $cus = Customer::find($id);
        $cus->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
