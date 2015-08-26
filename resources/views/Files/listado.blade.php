@extends('layout')
    @section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">Archivos</div>
                      @if (Session::has('status'))
                        <div class="alert alert-success" role="alert">
                          <p> {{ Session::get('status')}}</p>
                        </div> 
                        @endif
                    <div class="panel-body">
                
            
                    {!! Form::open(['route' => 'listado.file', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right'])  !!}       
                    {!! Form::text ('snip', null, ['class' => 'form-control', 'placeholder' => 'Número de Snip']) !!}     
                                      
                    <button type="submit" class="btn btn-default">Buscar</button>
                     
                {!! Form::close() !!}
            <p>
                <a class="btn btn-default" href="{{ route("new.file") }}" role="button">Nuevo</a>
            </p>  
                        @include('Files.partials.table')
                    </div>
                </div>
            </div>
        </div>
</div>
    @endsection
