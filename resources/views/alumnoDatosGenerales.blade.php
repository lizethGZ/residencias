@extends('alumno')
@section('contenido')

@if(!empty($nomb))
@foreach($nomb as $n)
@endforeach
<form action="/alumno/datosGenerales/create" method="post">
    @csrf
    <div class="row">

        <div class="col-sm-3">
            <br>
            <label for="semestre" id="nombre">Nombre: </label> <br>

            <input type="text" name="nombre" value={{$n->nombreAlumno}}></input><br>

        </div>
        <div class="col-sm-3">
            <br> <label for="semestre">Primer apellido: </label> <br>
            <input type="text" name="primerA" value={{$n->apellidoUnoAlumno}}></input><br>
        </div>
        <div class="col-sm-3">
            <br> <label for="semestre">Segundo apellido: </label> <br>
            <input type="text" name="segundoA" value={{$n->apellidoDosAlumno}}></input><br>
        </div>
        <div class="col-sm-3">
            <br> <label for="semestre">Teléfono: </label> <br>
            <input type="text" name="telefono" value={{$n->telefonoAlumno}}></input><br>
        </div>
        <div class="col-sm-3">
            <label for="matri">Matricula: </label> <br>
            <input type="text" name="matricula" value={{$n->numeroControl}}></input>
        </div>
        <div class="col-sm-3">
            <label for="dom">Domicilio: </label> <br>
            <input type="text" name="domicilio" value={{$n->domicilio}}></input>
        </div>
        <div class="col-sm-3">
            <label for="nss">Ciudad </label> <br>
            <input type="text" name="ciudad" value={{$n->ciudad}}></input>
        </div>
        <div class="col-sm-3">
            <label for="nss">Código Postal </label> <br>
            <input type="text" name="codigo" value={{$n->codigoPostal}}></input>
        </div>
        <div class="col-sm-6">
            <label for="correo">Correo electrónico: </label> <br>
            <input type="text" name="correo" readonly value={{ Auth::user()->email }}></input>
        </div>
        <div class="col-sm-6">
            <label for="nss">Numero de seguridad social </label> <br>
            <input type="text" name="nss" value={{$n->NSS}}></input>
        </div>
        
    </div>
    <br>
    <center>
        <button type="submit">Guardar</button>
    </center>
</form>

@else
<form action="/alumno/datosGenerales/create" method="post">
    @csrf
    <div class="row">

        <div class="col-sm-3">
            <br>
            <label for="semestre" id="nombre">Nombre: </label> <br>

            <input type="text" name="nombre"></input><br>

        </div>
        <div class="col-sm-3">
            <br> <label for="semestre">Primer apellido: </label> <br>
            <input type="text" name="primerA"></input><br>
        </div>
        <div class="col-sm-3">
            <br> <label for="semestre">Segundo apellido: </label> <br>
            <input type="text" name="segundoA"></input><br>
        </div>
        <div class="col-sm-3">
            <br> <label for="semestre">Teléfono: </label> <br>
            <input type="text" name="telefono"></input><br>
        </div>
        <div class="col-sm-3">
            <label for="matri">Matricula: </label> <br>
            <input type="text" name="matricula"></input>
        </div>
        <div class="col-sm-3">
            <label for="dom">Domicilio: </label> <br>
            <input type="text" name="domicilio"></input>
        </div>
        <div class="col-sm-3">
            <label for="nss">Ciudad </label> <br>
            <input type="text" name="ciudad" ></input>
        </div>
        <div class="col-sm-3">
            <label for="nss">Código Postal </label> <br>
            <input type="text" name="codigo" ></input>
        </div>
        <div class="col-sm-6">
            <label for="correo">Correo electrónico: </label> <br>
            <input type="text" name="correo" readonly value={{ Auth::user()->email }}></input>
        </div>
        <div class="col-sm-6">
            <label for="nss">Numero de seguridad social </label> <br>
            <input type="text" name="nss"></input>
        </div>
    </div>
    <br>
    <center>
        <button type="submit">Guardar</button>
    </center>
</form>

@endif

@endsection