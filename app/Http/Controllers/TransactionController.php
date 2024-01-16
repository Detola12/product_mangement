<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;
use function Ramsey\Collection\add;

class TransactionController extends Controller
{
    public function index(){
        $trans = Transaction::latest()->get();

        return view('transactions.index', compact('trans'));
    }

    public function create($id){
        $category = Category::all();
        $user = DB::table('customers')->find($id);
        return view('transactions.store', compact('user','category'));
    }

    public function store($cusid,Request $request){
        $catid = $request->option;
        $categoryprice = Category::find($request->option)->price;
        $total = $categoryprice * $request->amount;
        $payed = $this->check_extra($cusid);


        Transaction::create([
            'customer_id' => $cusid,
            'category_id' => $catid,
            'total_cost' => $total,
            'payed' => $payed,
            'units' => $request->amount
        ]);

        $this->updateCategory($catid, $request->amount);

        return redirect()->route('customer')->with('success', 'Transaction added successfully');

    }

    public function check_price($id, $amount){
        $categoryprice = Category::find($id)->price;
        $total = $categoryprice * $amount;
        return response()->json(['total' => $total]);
    }

    public function updateCategory($id, $amount){
        $category = DB::table('categories')->where('id','=',$id);
        $category->increment('sold', $amount);

    }

    public function delete($id){
        DB::table('transactions')->delete($id);
        return redirect()->back()->with('success','Deleted Successfully');
    }

    public function check_extra($id){
        $cextra = Customer::find($id);
        if ($cextra->extra>0){
            $add = $cextra->extra;
            $cextra->extra = 0;
            $cextra->save();
            return $add;
        }
        else{
            $add = 0;
            return $add;
        }

    }
}
