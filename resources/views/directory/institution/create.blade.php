@extends('layout')
    @section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading"> Instituciones </div>
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

                     {!! Form::open(['route' => 'create.institution', 'method' => 'POST']) !!}

                              @include('directory.institution.fields')

                              <button type="submit" class="btn btn-primary">Inscribir</button>
                            
                     {!! Form::close() !!}
                    <br>
                        @if (Session::has('status'))
                        <div class="alert alert-success" role="alert">
                          <p> {{ Session::get('status')}}</p>
                        </div> 
                        @endif
                      
                    <br>
                    <div>
                      @include('directory.institution.table')
                    </div>

                    </div>
                      

                      


                </div>
            </div>
        </div>
</div>
    @endsection