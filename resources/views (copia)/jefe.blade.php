@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/styleBrito.scss') }}"> 
@endsection
@section('content')

<section class="home_blog_area pad_top">
			<div class="contenedor">
            <div class="wrap">            
		<ul class="tabs">
			<li><a href="{{url('jefe')}}"><span class=""></span><span class="tab-text">Anteproyectos</span></a></li>
			<li><a href="{{url('jefe/proyectos')}}"><span class=""></span><span class="tab-text">Proyectos</span></a></li>
            <li><a href="{{url('jefe/token')}}"><span class=""></span><span class="tab-text">Solicitud de token</span></a></li>
            <li><a href="{{url('jefe/docentes')}}"><span class=""></span><span class="tab-text">Docentes</span></a></li>
            <li><a href="{{url('jefe/asesores')}}"><span class=""></span><span class="tab-text">Asesores</span></a></li>
            <li><a href="{{url('jefe/egresado')}}"><span class=""></span><span class="tab-text">Egresados</span></a></li>
            <li><a href="{{url('jefe/registrar')}}"><span class=""></span><span class="tab-text">Registrar</span></a></li>
            <li><a href="{{url('jefe/archivos')}}"><span class=""></span><span class="tab-text">Archivos</span></a></li>
        </ul>
        <div class="secciones">
            @yield('contenido')
        </div>
</section>    
        

@endsection
