@extends('layout')
    @section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingreso Archivo</div>
                    <div class="panel-body">

                      
                      @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                          <p>Porfavor Verifique la Información</p>
                            <ul>
                              @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                        </div>
                      @endif  

                     {!! Form::open(['route' => 'create.file', 'method' => 'POST']) !!}

                              @include('Files.partials.fields')
                              <button type="submit" class="btn btn-default">Crear</button>
                            
                     {!! Form::close() !!}

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
