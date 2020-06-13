@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1> Fazer Recarga</h1>

@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            @include('sweetalert::alert')
                <form method="POST" action="{{route('deposit.store')}}">
                    {!! csrf_field() !!}
               <div class="form-group">
                   <input type="text" name="value" placeholder="Valor" class="from-control">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Depositar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop