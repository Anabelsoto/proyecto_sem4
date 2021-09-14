<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cliente1 = Cliente::all();
        return view ('cliente')->with('clientes',$cliente1);
    }
    public function insertar(Request $request)
    {
            $cliente = new Cliente();
            $cliente ->ape_nom = $request->nombre1;
            $cliente ->iddocu = '2';
            $cliente ->numero = '918456230';
            $cliente ->sexo = 'M';
            $cliente ->save();
    }
    public function actualizar(Request $request)
            {
            $cliente = Cliente::find($request->id);
            $cliente ->ape_nom = $request->nombre;
            $cliente ->iddocu = '2';
            $cliente ->numero = '918456232';
            $cliente ->sexo = 'F';
            $cliente ->save();
            }
public function saluda(Request $request)
            {
                $var1 = $request->nombre;

                dd("hola este es un mensaje de la función saludo");
               // dd($request -> mensajito);
               // dd("hola soy nuevo mensaje");
               // dd($request->dni);
               // dd($request->mensaje);
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
