<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balance;
use App\Http\Requests\MonayValidationFormRequest;
use UxWeb\SweetAlert\SweetAlert;
use Alert;
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
        $response = $balance->deposit($request->value);
        
        
        
        if ($response['success'])

            return redirect()
                            ->route('admin.balance')
                            ->with('success', 'Depositado com Sucesso!');

        return redirect()
                        ->back()
                        ->with('error', 'erro');
    }
    public function sac(){
        return view('admin.balance.sac');
    }

    public function sacStore(MonayValidationFormRequest $request){
        
        $balance=auth()->user()->balance()->firstOrCreate([]);
        $response = $balance->sac($request->value);
        
        
        
        if ($response['success'])

            return redirect()
                            ->route('admin.balance')
                            ->with('success', 'Retirado com Sucesso!');

        return redirect()
                        ->back()
                        ->with('error', 'erro');
    }
    public function historic(){
        $historics = auth()->user()->historics()->get();
        #dd($historics);
        return view('admin.balance.historics', compact('historics'));
    
    }

    
}
