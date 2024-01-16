<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index($id){
        $transaction = Transaction::find($id);
        $remaining = $transaction->total_cost - $transaction->payed;
        return view('payments.index', compact('transaction','remaining'));
    }

    public function store($id,Request $request){
        $amount = $request->amount;
        $trans = Transaction::find($id);

        $add = $this->check_extra($trans->customer->id);
        $amount += $add;

        Payment::create([
            'customer_id' => $trans->customer->id,
            'transaction_id' => $id ,
            'amount' => $amount,
        ]);

        $this->update_payment($amount,$id);

        return redirect()->route('transaction');
    }

    public function update_payment($amount, $id){
        $transaction = Transaction::find($id);
        $customer = Customer::find($transaction->customer->id);
        $total = $transaction->total_cost - $transaction->payed;
        for($i = 0; $i < $amount; $i += 500){
            if ($total <= $i){
                $remain = $amount - $i;
                $customer->increment('extra', $remain);
                $transaction->increment('payed', $i);
                return;
            }
        }
            $transaction->increment('payed', $amount);

            return;
    }

    public function check_extra($id){
        $cextra = Customer::find($id);
        if ($cextra->extra>0){
            $add = $cextra->extra;
            $cextra->extra = 0;
            return $add;
        }
        else{
            $add = 0;
            return $add;
        }

    }
}
