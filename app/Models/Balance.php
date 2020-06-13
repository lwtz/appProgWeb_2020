<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use UxWeb\SweetAlert\SweetAlert;
use Alert;
class Balance extends Model
{
    public $timestamps = false;

    public function deposit($value){

        DB::beginTransaction();
        $totalBefore = $this->amount ? $this ->amount : 0;
        $this->amount += number_format($value, 2, '.', '');
        $deposit=$this->save();

        $historic = auth()->user()->historics()->create([
            'type'          => 'I',
            'amount'        => $value,
            'total_before'  => $totalBefore,
            'total_after'   => $this->amount,
            'date'          => date('Ymd'),
        ]);

       if($deposit && $historic){

            DB::commit();
            return [
                'success' => true,
                'message' => 'Depositado com sucesso'
                
            ];
        }else{
            DB::rollback();

        return[
            alert()->error('Ocorreu um erro! ', 'Tente Novamente'),
            'success' => false,
            'message' => 'Erro ao Depositar'
            ];
    
        }
    }
    public function sac(float $value) : Array {

        if($this->amount < $value)
            return[
                alert()->error('Operação Inválida', 'Saldo Insuficiente'),
                'success' => false,
                'message' => 'Saldo Insuficiente'
            ];
        DB::beginTransaction();
        $totalBefore = $this->amount ? $this ->amount : 0;
        $this->amount -= number_format($value, 2, '.', '');
        $sac=$this->save();

        $historic = auth()->user()->historics()->create([
            'type'          => 'O',
            'amount'        => $value,
            'total_before'  => $totalBefore,
            'total_after'   => $this->amount,
            'date'          => date('Ymd'),
        ]);

       if($sac && $historic){

            DB::commit();
            return [
                'success' => true,
                'message' => 'Retirado com sucesso'
            ];
        }else{
            DB::rollback();

        return[
            'success' => false,
            'message' => 'Erro ao Retirar'
            ];
    
        }
    }
  }


