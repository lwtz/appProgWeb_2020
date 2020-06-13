@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1 class="m-0 text-dark">Saldo</h1>
    
@stop

@section('content')
    
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary"><i class="fas fa-sync"></i> Atualizar</a>
                @if ($amount > 0)
                <a href="{{ route('balance.sac') }}" class="btn btn-danger"><i class="fas fa-money-bill-wave"></i> Sacar</a>
                @endif
                <a href="{{ route('balance.deposit') }}" class="btn btn-success"><i class="fas fa-money-bill-wave"></i> Depositar</a>
            </div>
            <div class="col-lg-4 col-xs-6">
                <div class="box-body">

                @include('sweetalert::alert')                           
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3> R$ {{number_format($amount, 2, ',', '.')}}</h3>

                            <p>Crédito Positivo</p>
                        </div>
                        
                        <div class="icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <a href="{{ route('balance.historic') }}" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop