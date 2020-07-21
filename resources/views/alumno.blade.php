@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/styleBrito.scss') }}">
@endsection
@section('content')



<section class="home_blog_area pad_top">
    <div class="contenedor">
        <div class="wrap">
            <ul class="tabs">
                @can('alumno.index')
                <li><a href="{{url('alumno')}}"><span class=""></span><span class="tab-text">Datos Generales</span></a></li>
                @endcan
                @can('alumno.escolar')
                <li><a href="{{url('alumno/escolar')}}"><span class=""></span><span class="tab-text">Escolar</span></a></li>
                @endcan
                @can('alumno.familiar')
                <li><a href="{{url('alumno/familiares')}}"><span class=""></span><span class="tab-text">Familiares</span></a></li>
                @endcan
                @can('alumno.solicitud')
                <li><a href="{{url('alumno/solicitud')}}"><span class=""></span><span class="tab-text">Solicitud</span></a></li>
                @endcan
                @can('alumno.empresa')
                <li><a href="{{url('alumno/empresa')}}"><span class=""></span><span class="tab-text">Empresa</span></a></li>
                @endcan
                @can('alumno.anteproyecto')
                <li><a href="{{url('alumno/anteproyecto')}}"><span class=""></span><span class="tab-text">Anteproyecto</span></a></li>
                @endcan
                @can('alumno.proyecto')
                <li><a href="{{url('alumno/proyecto')}}"><span class=""></span><span class="tab-text">Proyecto</span></a></li>
                @endcan
            </ul>
        </div>
    </div>

    <div class="secciones">
        @yield('contenido')
    </div>
</section>
@endsection