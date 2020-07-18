@extends('jefe')
@section('contenido')
<article id="tab6">
                <p class="font-weight-bold">Egresados</p>
                <p class="font-weight-bold"> <button type="submit" class="btn btn-success">Agregar Egresado</button> </p>
                <div class="container">
                        <div class="row">
                            <div class="col">
                                @if (empty($e))
                                    <h1>No hay egresados</h1>
                                @else
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Matricula</th>
                                                <th>Nombre</th>                                                        
                                      <!--{{ Auth::user()->name }}-->           <th>Semestre</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Plan estudios</th>
                                                <th>NSS</th>
                                                <th>Carrera</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>    
                                            @foreach($e as $egresados)                                  
                                                <tr class="table-warning">
                                                    <td>{{$egresados->numeroControl}}</td>
                                                    <td>{{$egresados->nombre}}</td>                                                            
                                                    <td>{{$egresados->semestre}}</td>
                                                    <td>{{$egresados->telefonoAlumno}}</td>
                                                    <td>{{$egresados->correoAlumno}}</td>
                                                    <td>{{$egresados->planEstudios}}</td>
                                                    <td>{{$egresados->NSS}}</td>
                                                    <td>{{$egresados->nombreCarrera}}</td>
                                                    <td>{{$egresados->statusAlumno}}</td>
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