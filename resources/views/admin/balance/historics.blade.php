@extends('adminlte::page')

@section('title', 'Historico de transações')

@section('content_header')
    <h1 class="m-0 text-dark">Historico de transações</h1>
    
@stop

@section('content')
    
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
             
                <div class="box-body">

                @include('sweetalert::alert') 

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Valor</th>
                            <th>Tipo</th>
                            <th>Data</th>
                            <th>?Sender?</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @forelse($historics as $historic)
                        <tr>
                            <td>{{ $historic->id}}</td>
                            <td>{{ number_format($historic->amount, 2, ',', '.')}}</td>
                            <td>{{ $historic->type($historic->type) }}</td>
                            <td>{{ $historic->date}}</td>
                            <td> teste </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>

                </table>
                </div>
            </div>
        </div>

    </div>
</div>
@stop