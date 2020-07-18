@extends('jefe')
@section('contenido')
<article id="tab7">
            <div class="row">
                <div class="col-sm-4">
                    <label for="semestre">Matricula: </label>
                    <input type="text"></input>
                </div>
                <div class="col-sm-4">
                    <label for="semestre">Nombre: </label>
                    <input type="text"></input>
                </div>  
                <div class="col-sm-4">
                <label for="semestre">Primer apellido: </label>
                    <input type="text"></input>
                </div>
                <div class="col-sm-4">
                <label for="semestre">Segundo apellido: </label>
                        <input type="text"></input>
                </div>  
                <div class="col-sm-4">
                    <label for="semestre">Teléfono: </label>
                    <input type="text"></input>
                </div>
                <div class="col-sm-4">
                    <label for="semestre">Correo electrónico: </label>
                    <input type="text"></input>
                </div> 
            </div> 
           <br> <center><button type="button" class="btn btn-warning">Guardar</button></center>
</article>
@endsection