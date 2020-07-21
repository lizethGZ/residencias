@extends('alumno')
@section('contenido')
<!-- c carreras e datos -->
@if(empty($e))
<form action="{{url('alumno/escolar/create')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-4">
            <label for="carrera">Carrera:</label> <br>
            <select name="carrera" id="carrera">
                @foreach($c as $ca)

                <option value={{$ca->claveCarrera}}> {{$ca->claveCarrera}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <label for="semestre">Semestre:</label> <br>
            <select name="semestre" id="semestre">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div class="col-sm-4">
            <br> <label for="estudios">Plan de estudios: </label> <br>
            <input type="text" name="estudios"></input>
        </div>
        <div class="col-sm-6">
            <br> <label for="semestre">Matricula:</label> <br>
            <input type="text" name="correo" readonly value={{ Auth::user()->matricula }}></input>

        </div>
        <div class="col-sm-6">
            <br> <label for="semestre">Token: </label> <br>
            <input type="text" name="token"></input>
        </div>
    </div>
    @if(empty($errors))

    @else
    <p>{{$errors}}</p>
    @endif
    <br>
    <center><button type="submit" class="btn btn-warning">Guardar</button>
</form>
@else
<form action="{{url('alumno/escolar/create')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-4">
            <label for="carrera">Carrera:</label> <br>
            <select name="carrera" id="carrera">
                @foreach($c as $ca)
                <option value={{$ca->claveCarrera}}> {{$ca->claveCarrera}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-4">
            <label for="semestre">Semestre:</label> <br>
            <select name="semestre" id="semestre">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div class="col-sm-4">
            <br> <label for="estudios">Plan de estudios: </label> <br>

            @foreach($e as $es)
            <input type="text" name="estudios" value={{$es->planEstudios}}></input>
            @endforeach
        </div>
        <div class="col-sm-6">
            <br> <label for="semestre">Matricula: </label> <br>
            <input type="text" name="matricula" readonly value={{ Auth::user()->matricula }}></input>
        </div>
        @foreach($e as $es)
        @if($es->replicaToken==null)
        <div class="col-sm-6">
                <br> <label for="semestre">Token: </label> <br>
                <input type="text" name="token"></input>
            </div>
        @else
            <div class="col-sm-6">
                <br> <label for="semestre">Token: </label> <br>
                <input type="text" readonly value={{$es->replicaToken}} ></input>
            </div>
        @endif
        @endforeach
    </div>
    @if(!empty($errors))
    <p>{{$errors}}</p>
    @endif
    <br>
    <center><button type="submit" class="btn btn-warning">Guardar</button>
</form>

@endif
@endsection