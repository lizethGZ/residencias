<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JefeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jefeAnteproyectos');
    }

    public function indexProyectos()
    {
        return view('jefeProyectos');
    }

    public function indexToken()
    {
        return view('jefeToken');
    }
    public function indexDocentes()
    {
        return view('jefeDocentes');
    }
    public function indexAsesores()
    {
        return view('jefeAsesores');
    }
    public function indexEgresado()
    {
        return view('jefeEgresados');
    }
    public function indexRegistrar()
    {
        return view('jefeRegistrar');
    }
    public function indexArchivos()
    {
        return view('jefeArchivos');
    }


}
