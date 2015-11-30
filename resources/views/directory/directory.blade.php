@extends('layout')
    @section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Directorio</div>

                    <div class="panel-body">

                    {!! Form::open(['route' => 'listado.file', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right'])  !!}       
                        {!! Form::text ('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre a buscar']) !!}                    
                        <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-search"></span>
                           Buscar</button>
                    {!! Form::close() !!}
        
                    <p>
                        <a class="btn btn-default" href="{{ route("create.directory") }}" role="button"> 
                        <span class="glyphicon glyphicon-pencil"> </span>  Nuevo</a>
                    </p>  
                      
                      @include('directory.partials.table')
                     
                    
                    </div>
                        @if (Session::has('status'))
                        <div class="alert alert-success" role="alert">
                          <p> {{ Session::get('status')}}</p>
                        </div> 
                        @endif
                      
                </div>
            </div>
        </div>
</div>
    @endsection

