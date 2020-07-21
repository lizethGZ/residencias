@extends('jefe')
@section('contenido')
<article id="tab3">
                <p class="font-weight-bold">Solicitudes de token</p>
                <div class="container">
                        <div class="row">
                            <div class="col">
                                @if (empty($s))
                                    <h1>No hay solicitudes</h1>                                 
                                @else                        
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Matricula</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Email</th>                                                        
                                            </tr>
                                        </thead>
                                        <tbody>    
                                            @foreach($s as $solicitudes)                                  
                                                <tr class="table-warning">
                                                    <td>{{$solicitudes->numeroControl}}</td>
                                                    <td>{{$solicitudes->nombre}}</td>
                                                    <td>{{$solicitudes->telefonoAlumno}}</td>
                                                    <td>{{$solicitudes->email}}</td>  
                                                    <td><form method="get" action="jefe/token/enviar/{{$solicitudes->email}}"><button type="submit" class="btn btn-success">Mandar token</button></form></td>                                                          
                                                    <td><button href="" type="submit" class="btn btn-danger">Eliminar</button></td>
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