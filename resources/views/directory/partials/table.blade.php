

                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Nombre Completo</th>
                                  <th>Institución</th>
                                  <th>Móvil</th>
                                  <th>Teléfono</th>
                                  <th>Otro Móvil</th>
                                  <th>Correo</th>
                                  <th width="150">Dirección</th>
                                  <th>Opciones</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($directory as $dir)   
                              <tr>
                                  <td>$dir->name</td>
                                  <td>$dir->municipalities->institution_id</td>
                                  <td>$dir->phone</td>
                                  <td>$dir->cell_phone</td>
                                  <td>$dir->signature</td>
                                  <td>eldelacalle12..com.ew@hotmail.com</td>
                                  <td>La Casa de La Loteria 2-22 zona 1 retalhuleu</td>
                                 <td><a  class="btn btn-default" href="{{ route('edit.file') }}"> <span class="glyphicon glyphicon-edit"> 
                                 </span>  </a>
                                 <a  class="btn btn-default" href="{{ route('edit.file') }}"> <span class="glyphicon glyphicon-remove"> 
                                 </span>  </a>
                                 </td> 
                          @endforeach
                             
                              </tr>
                          </tbody>
                      </table>