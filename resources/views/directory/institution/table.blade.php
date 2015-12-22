<style type="">
.clase{
  display:inline-block;
}
</style>
                      <table class="table table-bordered">
                          <thead>                
                              <tr>
                                 
                                  <th>Organización</th>
                                  <th>Opciones</th>
                              </tr>
                          </thead>
                         
                          @foreach($lists as $list)
                          <tbody>
                              <tr>
                                
                                  <td>{{ $list->name }} </td>
                                
                                 <td><a  class="btn btn-default" href="{{ route('edit.institution', $list->id)}}"> <span class="glyphicon glyphicon-edit"> 
                                 </span>  </a>

                                  {!! Form::open (['route' => ['delete.institution', $list->id], 'method' => 'DELETE', 'class' => 'clase']) !!}

                                    <button type="submit" class="btn btn-danger">Eliminar</button>

                                  {!! Form::close() !!}     

                                
                                 </td>                            
                              </tr>
                              @endforeach

                          </tbody>
                      </table>