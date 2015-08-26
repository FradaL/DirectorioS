
                                    <style>
                                     #hola {
                                        padding: 0;
                                        display: inline;
                                        }
                                    </style>

                        <p> Hay {{ $lists->total() }} Registros</p>
                        <table class="table table-striped">
                            <tr>
                                <th># Snip</th>
                                <th>Municipio</th>
                                <th>Año</th>
                                <th># de Bolsa</th>
                                <th>Casillero #</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach ($lists as $list)           
                            <tr>
                                <td>{{ $list->snip }} </td>
                                <td>{{ $list->municipalitie->town}}</td>
                                <td>{{ $list->years->year }}</td>
                                <td>{{ $list->bags->bag }}</td>
                                <td>{{ $list->lockers->locker }}</td>                           
                                
                                <td>
                                    <a  class="btn btn-info" href="{{ route('edit.file', $list->id) }}"> Editar </a>
                                    @if(Auth::User()->can('delete-file'))
                                    @include ('Files.partials.delete')
                                    @endif
                                </td>
                            </tr>
                            @endforeach

                        </table>
                        {!! $lists->render() !!}
