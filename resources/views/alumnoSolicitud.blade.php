@extends('alumno')
@section('contenido')
<form action="{{url('alumno/solicitud/create')}}" method="post">

    @csrf
    <h3>Datos de solicitud</h3>
    <div class="row">
        <div class="col-sm-3">
            <label for="proyecto">Fecha : </label> <br>
            <input type="text" name="fecha" readonly value="<?php echo (new DateTime())->format('Y-m-d'); ?>"></input> <br>
        </div>
        <div class="col-sm-3">
            <label for="proyecto">Nombre del proyecto : </label> <br>
            <input type="text" name="nombreProyecto"></input> <br>
        </div>
        <div class="col-sm-3">
            <label for="estudios">Opcion Elegida: </label> <br>
            <select name="opcion">

                <option> Bancos de proyectos</option>
                <option> Propuesta propia</option>
                <option> Trabajador</option>

            </select>
        </div>
        <div class="col-sm-3">
            <label for="proyecto">Periodo proyectado Inicio: </label> <br>
            <input type="date" id="start" name="inicio" min="<?php echo (new DateTime())->format('Y-m-d'); ?>" max="2021-12-31">
            <label for="proyecto">Periodo proyectado Termino: </label> <br>
            <input type="date" id="start" name="termino" min="<?php echo (new DateTime())->format('Y-m-d'); ?>" max="2021-12-31">
        </div>
        <hr size="100">
        <h3>Datos de la empresa</h3>
        <!-- Datos empresa -->
        <div class="row">
            <div class="col-sm-4">
                <br><label for="nombre">Nombre de la empresa: </label><br>
                <input type="text" name="nombreEmpresa"></input><br>
            </div>
            <div class="col-sm-4">
                <br><label for="rfc">RFC: </label><br>
                <input type="text" name="rfcEmpresa"></input><br>
            </div>
            <div class="col-sm-4">
                <br> <label for="opcion"> Giro: </label> <br>
                <select name="giro">
                    <option> Industrial</option>
                    <option> Público</option>
                    <option> Servicios</option>
                    <option> Privado</option>
                    <option> Otros</option>
                </select>
            </div>
            <div class="col-sm-12">
                <br><label for="dom">Domicilio: </label>
                <input type="text" name="domicilioEmpresa" style="width : 1000px;"></input><br>
            </div>
            <div class="col-sm-3">
                <br><label for="col">Colonia: </label><br>
                <input type="text" name="coloniaEmpresa"></input><br>
            </div>
            <div class="col-sm-3">
                <br><label for="post">Código postal: </label><br>
                <input type="text" name="cpEmpresa"></input><br>
            </div>
            <div class="col-sm-3">
                <br><label for="ciudad">Ciudad: </label><br>
                <input type="text" name="ciudadEmpresa"></input><br>
            </div>
            <div class="col-sm-3">
                <br><label for="tel">Teléfono fijo o celular: </label><br>
                <input type="text" name="telefonoEmpresa"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="tit">Nombre del titular de la organización: </label><br>
                <input type="text" name="titularNombre"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="puesto">Puesto titular: </label><br>
                <input type="text" name="puestoTitular"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="asesor">Nombre del asesor externo: </label><br>
                <input type="text" name="asesorNombre"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="puesto">Puesto asesor: </label><br>
                <input type="text" name="asesorPuesto"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="pers">Nombre de la persona que firmará el acuerdo (Organizacion-Residente-Escuela): </label><br>
                <input type="text" name="firmaNombre"></input><br>
            </div>
            <div class="col-sm-6">
                <br><label for="puesto">Puesto persona que firmará: </label><br>
                <input type="text" name="firmaPuesto"></input><br>
            </div>
            <hr>
            <br><br>
            <h3>Dato extra del egresado</h3>

            <div class="col-sm-12">
                <label for="estudios">Para seguridad social acudir a :  </label> <br>
                <select name="seguridad" id="par">

                    <option> IMSS</option>
                    <option> ISSSTE</option>
                    <option> OTRO</option>

                </select>
            </div>           
        </div>
    </div>
    @if(!empty($r))
    @foreach($r as $re)
    <input type="hidden" name="numeroControl" value={{$re->numeroControl}}></input>
    <input type="hidden" name="nombreAlumno" value={{$re->nombreAlumno}}></input>
    <input type="hidden" name="apellidoUnoAlumno" value={{$re->apellidoUnoAlumno}}></input>
    <input type="hidden" name="apellidoDosAlumno" value={{$re->apellidoDosAlumno}}></input>
    <input type="hidden" name="semestre" value={{$re->semestre}}></input>
    <input type="hidden" name="telefonoAlumno" value={{$re->telefonoAlumno}}></input>
    
    <input type="hidden" name="correoAlumno" value={{$re->correoAlumno}}></input>
    <input type="hidden" name="domicilio" value={{$re->domicilio}}></input>
    <input type="hidden" name="ciudad" value={{$re->ciudad}}></input>
    <input type="hidden" name="codigoPostal" value={{$re->codigoPostal}}></input>
    <input type="hidden" name="planEstudios" value={{$re->planEstudios}}></input>
    <input type="hidden" name="NSS" value={{$re->NSS}}></input>
    <input type="hidden" name="claveCarrera" value={{$re->claveCarrera}}></input>        
    @endforeach
    @endif
    <br>
    <center><button type="submit" class="btn btn-warning">Guardar</button>
</form>
@endsection