@extends('jefe')
@section('contenido')
			<article id="tab1">
            <p class="font-weight-bold">Proyectos</p>
                          <div class="container">
                                <div class="row">
                                    <div class="col">
                                        @if (empty($p))
                                            <h1>No hay proyectos</h1>
                                        @else
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Clave del proyecto</th>
                                                        <th>Titulo</th>
                                                        <th>Fecha de inicio</th>
                                                        <th>Asesor</th>
                                                        <th>Número de control alumno</th>
                                                        <th>Nombre alumno</th>
                                                        <th>Estado del proyecto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>    
                                                    @foreach($p ?? '' as $proyect)                                  
                                                        <tr class="table-warning">
                                                            <td>{{$proyect->tituloAnteproyecto}}</td>
                                                            <td>{{$proyect->fechaInicio}}</td>
                                                            <td>{{$proyect->nombreAsesor}}</td>
                                                            <td>{{$proyect->descripcionTipoAsesor}}</td>
                                                            <td>{{$proyect->numeroControl}}</td>
                                                            <td>{{$proyect->nombreAlumno}}</td>
                                                            <td>{{$proyect->statusProyecto}}</td>
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