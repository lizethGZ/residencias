@extends('jefe')
@section('contenido')
<article id="tab4">
                <p class="font-weight-bold">Docentes</p>
                <p class="font-weight-bold"> <button type="submit" class="btn btn-success">Agregar Docente</button> </p>
                <div class="container">
                        <div class="row">
                            <div class="col">
                                @if (empty($d))
                                    <h1>No hay docentes</h1>
                                @else
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Clave</th>
                                                <th>Nombre</th>                                                        
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Habilidad</th>                                                        
                                            </tr>
                                        </thead>
                                        <tbody>    
                                            @foreach($d as $docentes)                                  
                                                <tr class="table-warning">
                                                    <td>{{$docentes->claveAsesor}}</td>
                                                    <td>{{$docentes->nombreAsesor}}</td>                                                            
                                                    <td>{{$docentes->telefonoAsesor}}</td>
                                                    <td>{{$docentes->correoElectronicoAsesor}}</td>
                                                    <td>{{$docentes->descripcionHabilidad}}</td>
                                                    
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