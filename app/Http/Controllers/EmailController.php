<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{


    public function enviarCorreo(Request $request)
    {
        /** Obtenemos los parametros */
        $asunto = 'Usa este token para continuar con tu registro';
        $contenido = 'Token';
        $adjunto = 'token adjunto';
        /**
         * El primer parametro es nuestra vista
         * El segundo parametro son los valores a inyectar en la vista
         * El tercer parametro es la instancia que define los métodos necesarios para el envío del correo
         * use() nos permite introducir valores dentro del closure para ser utilizadas por la instancia
         */
        Mail::send('email', ['contenido' => $contenido], function ($mail) use ($asunto, $adjunto) {
            $mail->from('tesji@residencias.com', 'T O K E N');
            $mail->to('ejemplo@mail.com');
            $mail->subject($asunto);
            $mail->attach($adjunto);            
        });
        /** Respondemos con status OK */
        return response()->json(['status' => 200, 'message' => 'Envío exitoso']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
