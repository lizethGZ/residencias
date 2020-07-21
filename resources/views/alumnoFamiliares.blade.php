@extends('alumno')
@section('contenido')
@if(empty($f1) && empty($f2))
<form action="{{url('alumno/familiares/create')}}" method="post">
    @csrf
    <b><label for="">PRIMER FAMILIAR </label></b>
    <div class="row">
        <div class="col-sm-6">
            <label for="semestre">Nombre: </label> <br>
            <input type="text" name="nombre1"></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Primer apellido: </label> <br>
            <input type="text" name="apellidoUno1"></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Segundo apellido: </label> <br>
            <input type="text" name="apellidoDos1"></input>
        </div>
        <div class="col-sm-6">
            <label for="estudios">Parentesco: </label> <br>
            <select name="parentesco1" id="par">
                @foreach($p as $pa)
                <option value={{$pa->descripcionParentezco}}> {{$pa->descripcionParentezco}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Teléfono: </label> <br>
            <input type="text" name="telefono1"></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Correo: </label> <br>
            <input type="email" name="email1"></input>
        </div>
        <div class="col-sm-6">
            <input type="hidden" name="referencia1" value="contacto1"></input>
        </div>
    </div>
    <!-- Segundo familiar -->
    <hr color="blue" size=20>
    <b> <label for="">SEGUNDO FAMILIAR </label> </b>
    <div class="row">

        <div class="col-sm-6">
            <label for="semestre">Nombre: </label> <br>
            <input type="text" name="nombre2"></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Primer apellido: </label> <br>
            <input type="text" name="apellidoUno2"></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Segundo apellido: </label> <br>
            <input type="text" name="apellidoDos2"></input>
        </div>
        <div class="col-sm-6">
            <label for="estudios">Parentesco: </label> <br>
            <select name="parentesco2" id="par">
                @foreach($p as $pa)
                <option value={{$pa->descripcionParentezco}}> {{$pa->descripcionParentezco}}</option>
                @endforeach

            </select>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Teléfono: </label> <br>
            <input type="text" max="10" name="telefono2"></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Correo: </label> <br>
            <input type="email" name="email2"></input>
        </div>
        <div class="col-sm-6">
            <input type="hidden" name="referencia2" value="contacto2"></input>
        </div>
    </div>
    <br>
    <center><button type="submit" class="btn btn-warning">Guardar</button>
</form>
@else

<form action="{{url('alumno/familiares/create')}}" method="post">
    @foreach($f1 as $fUno)
    @csrf
    <b><label for="">PRIMER FAMILIAR </label></b>
    <div class="row">
        <div class="col-sm-6">
            <label for="semestre">Nombre: </label> <br>
            <input type="text" name="nombre1" value={{$fUno->nombreContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Primer apellido: </label> <br>
            <input type="text" name="apellidoUno1" value={{$fUno->apellidoUnoContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Segundo apellido: </label> <br>
            <input type="text" name="apellidoDos1" value={{$fUno->apellidoDosContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="estudios">Parentesco: </label> <br>
            <select name="parentesco1" id="par">
                @foreach($p as $pa)
                <option value={{$pa->descripcionParentezco}}> {{$pa->descripcionParentezco}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Teléfono: </label> <br>
            <input type="text" name="telefono1" value={{$fUno->telefonoContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Correo: </label> <br>
            <input type="email" name="email1" value={{$fUno->correoContacto}}></input>
        </div>
        <div class="col-sm-6">
            <input type="hidden" name="referencia1" value="contacto1"></input>
        </div>
    </div>
    @endforeach
    @foreach($f2 as $fDos)
    <!-- Segundo familiar -->
    <hr color="blue" size=20>
    <b> <label for="">SEGUNDO FAMILIAR </label> </b>
    <div class="row">

        <div class="col-sm-6">
            <label for="semestre">Nombre: </label> <br>
            <input type="text" name="nombre2" value={{$fDos->nombreContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Primer apellido: </label> <br>
            <input type="text" name="apellidoUno2" value={{$fDos->apellidoUnoContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Segundo apellido: </label> <br>
            <input type="text" name="apellidoDos2" value={{$fDos->apellidoDosContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="estudios">Parentesco: </label> <br>
            <select name="parentesco2" id="par">
                @foreach($p as $pa)
                <option value={{$pa->descripcionParentezco}}> {{$pa->descripcionParentezco}}</option>
                @endforeach

            </select>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Teléfono: </label> <br>
            <input type="text" max="10" name="telefono2" value={{$fDos->telefonoContacto}}></input>
        </div>
        <div class="col-sm-6">
            <label for="semestre">Correo: </label> <br>
            <input type="email" name="email2" value={{$fDos->correoContacto}}></input>
        </div>
        <div class="col-sm-6">
            <input type="hidden" name="referencia2" value="contacto2"></input>
        </div>
    </div>
    @endforeach
    <br>
    <center><button type="submit" class="btn btn-warning">Guardar</button>
</form>

@endif

@endsection