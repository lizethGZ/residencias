@extends('jefe')
@section('contenido')
<article id="tab2">
                <p class="font-weight-bold">Anteproyectos</p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            @if (empty($a))
                                <h1>No hay anteproyectos</h1>
                            @else
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Fecha de inicio</th>                                                        
                                            <th>Número de control alumno</th>
                                            <th>Nombre alumno</th>
                                            <th>Estado del anteproyecto</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                        @foreach($a ?? '' as $anteproyect)                                  
                                            <tr class="table-warning">
                                                <td>{{$anteproyect->tituloAnteproyecto}}</td>
                                                <td>{{$anteproyect->fechaInicio}}</td>                                                            
                                                <td>{{$anteproyect->numeroControl}}</td>
                                                <td>{{$anteproyect->nombreAlumno}}</td>
                                                <td>{{$anteproyect->statusAnteroyecto}}</td>
                                            </tr>
                                        @endforeach                                   				
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
              </div>
            </article>
@endsection