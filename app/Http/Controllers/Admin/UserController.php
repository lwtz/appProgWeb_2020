<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use UxWeb\SweetAlert\SweetAlert;
use Alert;

class UserController extends Controller
{
    protected $user;
    
    public function list(){

        $users = User::all();
        #dd($users);
        #$users = auth()->user()->users()->get();

        return view('admin.users.list', compact('users'));
    }
    public function papel(){
        alert()->info('Preço do papel', 'R$: 0,80/Kg')->persistent("Close this");
        return redirect()
                        ->back();
    }
    public function plastico(){
        alert()->info('Preço do plastico', 'R$: 1,90/Kg')->persistent("Close this");
        return redirect()
                        ->back();
    }
    public function vidro(){
        alert()->info('Preço do vidro', 'R$: 0,10/Kg')->persistent("Close this");
        return redirect()
                        ->back();
    }
    public function metal(){
        alert()->info('Preço do metal', 'R$: 0,80/Kg')->persistent("Close this");
        return redirect()
                        ->back();
    }
    public function naoreciclavel(){
        alert()->info('Nao reciclavel', 'Entrega free')->persistent("Close this");
        return redirect()
                        ->back();
    }
    public function cadastrarTipo(){
        alert()->warning('Operação Inválida', 'Em desenvolvimento')->autoclose(3500);
        return redirect()
                        ->back();
    }
}
