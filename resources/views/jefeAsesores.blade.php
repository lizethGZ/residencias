@extends('jefe')
@section('contenido')
<article id="tab5">
                <p class="font-weight-bold">Asesores</p>
                <p class="font-weight-bold"> <button type="submit" class="btn btn-success">Agregar Asesor</button> </p>
                <div class="container">
                        <div class="row">
                            <div class="col">
                                @if (empty($as))
                                    <h1>No hay asesores</h1>
                                @else
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Clave</th>
                                                <th>Nombre</th>                                                        
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Habilidad</th>
                                                <th>Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>    
                                            @foreach($as as $asesores)                                  
                                                <tr class="table-warning">
                                                    <td>{{$asesores->claveAsesor}}</td>
                                                    <td>{{$asesores->nombreAsesor}}</td>                                                            
                                                    <td>{{$asesores->telefonoAsesor}}</td>
                                                    <td>{{$asesores->correoElectronicoAsesor}}</td>
                                                    <td>{{$asesores->descripcionHabilidad}}</td>
                                                    <td>{{$asesores->descripcionTipoAsesor}}</td>
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