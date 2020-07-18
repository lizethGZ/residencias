<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Mail\Email;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\all;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumno');
    }
        //navegacion
        public function indexDatosGenerales()
        {   
            $proyecto=DB::select("select * from table_alumno where table_alumno.correoAlumno='". Auth::user()->email ."'");             
            return view('alumnoDatosGenerales',['nomb'=>$proyecto]);

        }
            //creacion
            public function indexDatosGeneralesC(Request $request)
            {
                DB::select('call regis(?,?,?,?,?,?,?,?)',array($request['nombre'],$request['primerA'],$request['segundoA'],$request['correo'],$request['matricula'],$request['nss'],$request['telefono'],$request['domicilio']));
                Mail::to($request['correo'])->send(new Email);
                return redirect('alumno/escolar');                                
                //dd($request);
                
            }
            
        public function indexEscolar()
        {
            return view('alumnoEscolar');
        }
            public function indexEscolarC(Request $request)
            {
                dd($request);
            }
        public function indexFamiliares()
        {
            return view('alumnoFamiliares');
        }
        public function indexSolicitud()
        {
            return view('alumnoSolicitud');
        }
        public function indexEmpresa()
        {
            return view('alumnoEmpresa');
        }
        public function indexAnteproyecto()
        {
            return view('alumnoAnteproyecto');
        }
        public function indexProyecto()
        {
            return view('alumnoProyecto');
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
