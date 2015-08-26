                              <div class="form-group">
                                {!! Form::label('snip', 'SNIP') !!}
                                {!! Form::text('snip', null, ['class' => 'form-control', 'placeholder' => 'Ingrese # Snip']) !!} 
                              </div>

                              <div class="form-group">
                                {!! Form::label('town', 'Municipio') !!}
                                {!! Form::select('town', $town, null, ['class' => 'form-control']) !!}
                              </div>
                               
                              <div class="form-group">
                                {!! Form::label('year', 'Año') !!}
                                {!! Form::select('year',  $year, null, ['class' => 'form-control']) !!} 
                              </div>

                              <div class="form-group">
                                {!! Form::label('bag', 'Número de Bolsa') !!}
                                {!! Form::select('numberbag',  $bag, null, ['class' => 'form-control']) !!} 
                              </div>

                              <div class="form-group">
                                {!! Form::label('locker', 'Casillero') !!}
                                {!! Form::select('locker',  $locker, null, ['class' => 'form-control']) !!} 
                              </div>

                              