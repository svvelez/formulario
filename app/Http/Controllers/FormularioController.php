<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\FormularioMailable;


class FormularioController extends Controller
{

    public function index()
    {
        return view('formulario.index');

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'tipo_de_denuncia'=>'required',
            'situacion'=>'required',
            'fecha'=>'required',

            'nombre_relacionada_reporte'=>'required',
            'cargo'=>'required',
            'detalles_ad'=>'required',

            't_vinculacion'=>'required',
            'email'=>'required',
            'numero'=>'required',

      ],

        [
            'tipo_de_denuncia.required' => 'ingrese nombre del producto',
            'situacion.required' => 'ingrese nombre del producto',
            'fecha.required' => 'ingrese nombre del producto',

            'nombre_relacionada_reporte.required' => 'ingrese nombre del producto',
            'cargo.required' => 'ingrese nombre del producto',
            'detalles_ad.required' => 'ingrese nombre del producto',

            't_vinculacion.required' => 'ingrese nombre del producto',
            'email.required' => 'ingrese nombre del producto',
            'numero.required' => 'ingrese nombre del producto',
        ]);


        $destino_nombre=$request->nombre;
        $destino_email=$request->email;
        $email = new \App\Mail\FormularioMailable($request);
        Mail::to($destino_email)->send($email);

        return response()->json(['success' => 'true', 'mensaje' => 'hola']);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
