@extends('alumno')
@section('contenido')
<form action="alumno/escolar/create" method="post">
@csrf
    <div class="row">
        <div class="col-sm-4">
            <label for="carrera">Carrera:</label> <br>
            <select name="carrrera" id="carrera">
                <option value="isic">ISIC</option>
                <option value="iquim">IQUIM</option>
                <option value="iciv">ICIV</option>
                <option value="admon">ADMON</option>
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
            <select name="estudios" id="estudios">
                <option value="opcion1">opcion1</option>
                <option" value="opcion2">opcion2</option>
            </select>
        </div>
        <div class="col-sm-6">
            <br> <label for="semestre">Matricula: </label> <br>
            <input type="text" name="matricula"></input>
        </div>
        <div class="col-sm-6">
            <br> <label for="semestre">Token: </label> <br>
            <input type="text" name="token"></input>
        </div>
    </div>
    <br>
    <center><button type="submit" class="btn btn-warning">Guardar</button>
</form>
@endsection