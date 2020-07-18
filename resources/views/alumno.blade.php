@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/styleBrito.scss') }}">
@endsection
@section('content')



<section class="home_blog_area pad_top">
    <div class="contenedor">
        <div class="wrap">
            <ul class="tabs">
                <li><a href="{{url('alumno')}}"><span class=""></span><span class="tab-text">Datos Generales</span></a></li>
                <li><a href="{{url('alumno/escolar')}}"><span class=""></span><span class="tab-text">Escolar</span></a></li>
                <li><a href="{{url('alumno/familiares')}}"><span class=""></span><span class="tab-text">Familiares</span></a></li>
                <li><a href="{{url('alumno/solicitud')}}"><span class=""></span><span class="tab-text">Solicitud</span></a></li>
                <li><a href="{{url('alumno/empresa')}}"><span class=""></span><span class="tab-text">Empresa</span></a></li>
                <li><a href="{{url('alumno/anteproyecto')}}"><span class=""></span><span class="tab-text">Anteproyecto</span></a></li>
                <li><a href="{{url('alumno/proyecto')}}"><span class=""></span><span class="tab-text">Proyecto</span></a></li>
            </ul>
        </div>
    </div>

    <div class="secciones">
        @yield('contenido')
    </div>
</section>
@endsection