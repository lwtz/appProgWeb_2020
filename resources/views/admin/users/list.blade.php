@extends('adminlte::page')

@section('title', 'Listar Usuários')

@section('content_header')
    <h1 class="m-0 text-dark">Listar Usuários</h1>
    
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
                            <th>Nome</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email }}</td>
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