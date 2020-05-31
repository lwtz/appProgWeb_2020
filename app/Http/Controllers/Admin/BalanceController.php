<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balance;
use App\Http\Requests\MonayValidationFormRequest;
class BalanceController extends Controller
{
    public function index(){
        #dd(auth()->user()->balance()->get());
        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : 0;
        return view('admin.balance.index', compact('amount'));
    }
    public function deposit()
    {
        return view('admin.balance.deposit');
    }
    public function depositStore(MonayValidationFormRequest $request){
        
        $balance=auth()->user()->balance()->firstOrCreate([]);
        $balance->deposit($request->value);
    }
    
}
