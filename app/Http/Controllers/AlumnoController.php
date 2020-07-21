<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Mail\Email;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpWord\TemplateProcessor;

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
                DB::select('call regis(?,?,?,?,?,?,?,?,?,?)',array($request['nombre'],$request['primerA'],$request['segundoA'],$request['correo'],$request['matricula'],$request['nss'],$request['telefono'],$request['domicilio'],$request['ciudad'],$request['codigo']));                                                                                                
                return redirect('alumno/escolar');  
                      
                
                
            }
            
        public function indexEscolar()
        {   
            $carreras=DB::select("select table_carrera.claveCarrera from table_carrera where table_carrera.statusCarrera='A' ");
            $escolar=DB::select("select * from table_alumno where table_alumno.correoAlumno='". Auth::user()->email ."'");             
            
            return view('alumnoEscolar',['c'=>$carreras,'e'=>$escolar]);
        }
            public function indexEscolarC(Request $request)
            {
            $tokenComparacion=DB::select('select users.token from users where users.email = ?', [Auth::user()->email]);
            if ($tokenComparacion=$request['token']) {
                DB::select('call escolar(?,?,?,?,?,?)',array($request['carrera'],$request['semestre'],$request['estudios'],$request['matricula'],$request['token'],'{{Auth::user()->email}}'));                
                return redirect('alumno/familiares');
            }else{
                $carreras=DB::select("select table_carrera.claveCarrera from table_carrera where table_carrera.statusCarrera='A' ");
                $escolar=DB::select("select * from table_alumno where table_alumno.correoAlumno='". Auth::user()->email ."'");                    
                return view('alumnoEscolar',['errors'=>'El token no es valido','c'=>$carreras,'e'=>$escolar]);
            }                
            }
        public function indexFamiliares()
        {
            $parentezco=DB::select("SELECT * FROM table_parentezco WHERE table_parentezco.statusParentezco='A'");
            $familiar1=DB::select("call verFamiliares(?)",array(Auth::user()->email));
            $familiar2=DB::select("call verFamiliares2(?)",array(Auth::user()->email));
            
            return view('alumnoFamiliares',['p'=>$parentezco,'f1'=>$familiar1,'f2'=>$familiar2]);
        }
            public function indexFamiliaresC(Request $request)
            {            
              DB::select('call familiares(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',array($request['nombre1'],$request['apellidoUno1'],$request['apellidoDos1'],$request['parentesco1'],$request['telefono1'],$request['referencia1'],$request['nombre2'],$request['apellidoUno2'],$request['apellidoDos2'],$request['parentesco2'],$request['telefono2'],$request['referencia2'],Auth::user()->matricula,$request['email1'],$request['email2']));
              return redirect('alumno/solicitud');
            }
        public function indexSolicitud()
        {            
            $residente=DB::select("call verAlumno(?)",[Auth::user()->email]);  
            return view('alumnoSolicitud',['r'=>$residente]);
        }
            public function indexSolicitudC(Request $req)
            {
                                                       
                $template=new TemplateProcessor('word-template/FO-ACA-17_SolicitudResidenciaProfesional.docx');
                $template->setValue('fecha',$req['fecha']);
                $template->setValue('nombreProyecto',$req['nombreProyecto']);                
                if($req['opcion']=='Bancos de proyectos'){
                    $template->setValue('opcion1','*');
                    $template->setValue('opcion2','');
                    $template->setValue('opcion3','');
                }elseif($req['opcion']=='Propuesta propia'){
                    $template->setValue('opcion1','');
                    $template->setValue('opcion2','*');
                    $template->setValue('opcion3','');
                }elseif($req['opcion']=='Trabajador'){
                    $template->setValue('opcion1','');
                    $template->setValue('opcion2','');
                    $template->setValue('opcion3','*');
                }
                


                $template->setValue('fechaInicio',$req['inicio']);
                $template->setValue('fechaTermino',$req['termino']);
                $template->setValue('nombreEmpresa',$req['nombreEmpresa']);
                if($req['giro']='Industrial'){
                    $template->setValue('giroI','*');
                    $template->setValue('giroO','');
                    $template->setValue('giroS','');
                    $template->setValue('giroP','');
                    $template->setValue('giroPriv','');
                }elseif($req['giro']='Servicios'){
                    $template->setValue('giroI','');
                    $template->setValue('giroO','');
                    $template->setValue('giroS','*');
                    $template->setValue('giroP','');
                    $template->setValue('giroPriv','');
                }elseif($req['giro']='Otro'){
                    $template->setValue('giroI','');
                    $template->setValue('giroO','*');
                    $template->setValue('giroS','');
                    $template->setValue('giroP','');
                    $template->setValue('giroPriv','');
                }elseif($req['giro']='Publico'){
                    $template->setValue('giroI','');
                    $template->setValue('giroO','');
                    $template->setValue('giroS','');
                    $template->setValue('giroP','*');
                    $template->setValue('giroPriv','');
                }elseif($req['giro']='Privado'){
                    $template->setValue('giroI','');
                    $template->setValue('giroO','');
                    $template->setValue('giroS','');
                    $template->setValue('giroP','');
                    $template->setValue('giroPriv','*');                    
                }
                

                $template->setValue('rfcEmpresa',$req['rfcEmpresa']);
                $template->setValue('domicilioEmpresa',$req['domicilioEmpresa']);
                $template->setValue('coloniaEmpresa',$req['coloniaEmpresa']);
                $template->setValue('cpEmpresa',$req['cpEmpresa']);
                $template->setValue('ciudadEmpresa',$req['ciudadEmpresa']);
                $template->setValue('telefonoEmpresa',$req['telefonoEmpresa']);
                $template->setValue('titularNombre',$req['titularNombre']);
                $template->setValue('titularPuesto',$req['puestoTitular']);
                $template->setValue('asesorNombre',$req['asesorNombre']);
                $template->setValue('asesorPuesto',$req['asesorPuesto']);
                $template->setValue('firmaNombre',$req['firmaNombre']);
                $template->setValue('firmaPuesto',$req['firmaPuesto']);

            
                $template->setValue('nombreResidente',$req['nombreAlumno']);
                $template->setValue('carreraResidente',$req['claveCarrera']);
                $template->setValue('matriculaResidente',$req['numeroControl']);
                $template->setValue('domicilioResidente',$req['domicilio']);
                $template->setValue('ciudadResidente',$req['ciudad']);
                $template->setValue('cpResidente',$req['codigoPostal']);
                $template->setValue('correoResidente',$req['correoAlumno']);
                $template->setValue('telefonoResidente',$req['telefonoAlumno']);
                if($req['seguridad']='IMSS'){
                    $template->setValue('seguridadIM','*');
                    $template->setValue('seguridadIS','');
                    $template->setValue('seguridadO','');
                }elseif($req['seguridad']='ISSSTE'){
                    $template->setValue('seguridadIM','');
                    $template->setValue('seguridadIS','*');
                    $template->setValue('seguridadO','');
                }elseif($req['seguridad']='OTROS'){
                    $template->setValue('seguridadIM','');
                    $template->setValue('seguridadIS','');
                    $template->setValue('seguridadO','*');
                }
                
                $fileName = $req['nombreAlumno'] . $req['numeroControl'] . 'solicitudResidencias';
                $template->saveAs($fileName . '.docx');
                return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
              
                
                
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


/*

insert into table_alumno_contacto(table_alumno_contacto.numeroControl,table_alumno_contacto.idContacto) values(Pcorreo,(select table_contacto.idContacto from table_contacto where table_contacto.correoContacto=correo1)),(Pcorreo,(select table_contacto.idContacto from table_contacto where table_contacto.correoContacto=correo2));

*/