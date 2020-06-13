@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">O QUE É RECICLAGEM E QUAL SUA IMPORTÂNCIA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                @include('sweetalert::alert')
                    <p class="mb-2">A reciclagem é descrita como um processo onde há a transformação de uma
                     substância residual sólida que não seria aproveitada, 
                     incluindo aí mudanças em seu estado físico, físico-químico ou então biológico, 
                     procurando deste modo atribuir características a este resíduo para que, assim, 
                     ele se torne uma matéria prima ou então um produto, 
                     segundo a Política Nacional de Resíduos Sólidos (PNRS).</p>
                     
                     <img src='vendor/adminlte/dist/img/recicle.jpg' alt='nome alternativo' />
                     
                </div>
            </div>
        </div>
    </div>
@stop
