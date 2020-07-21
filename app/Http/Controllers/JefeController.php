<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class JefeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyecto=DB::select("call verProyectos");    
        return view('jefeAnteproyectos');
    }

    public function indexProyectos()
    {
        $anteproyecto=DB::select('call verAnteproyecto');
        $proyecto=DB::select("call verProyectos"); 
        return view('jefeProyectos');
    }

    public function indexToken()
    {
        $solicitudes=DB::select("call verSolicitudes");
        return view('jefeToken',['s'=>$solicitudes]);        
    }
    public function indexTokenE(String $d)
    {        
        
        Mail::to($d)->send(new Email);        
        $obj = new Email();
        $obj->build($d);
        $solicitudes=DB::select("call verSolicitudes");
        return redirect('jefe/token');
    }
    public function indexDocentes()
    {
        $docentes=DB::select('call verDocentes');
        return view('jefeDocentes');
    }
    public function indexAsesores()
    {
        $asesores=DB::select('call verAsesores');
        return view('jefeAsesores');
    }
    public function indexEgresado()
    {
        $egresados=DB::select('call verEgresados');
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
