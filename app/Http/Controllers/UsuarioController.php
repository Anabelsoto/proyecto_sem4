<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario1 = usuario::all();
        return view('usuario')->with('usuarios',$usuario1);
    }
   /* public function insertar()
    {
            $usuario = new Usuario();
            $usuario ->ape_nom = 'Tantalean Quispe, Pedro';
            $usuario ->usu_user = 'Pedrotantalean@gmail.com';
            $usuario ->save();
    }*/
    public function insertar(Request $request)
    {
            $usuario = new Usuario();
            $usuario ->ape_nom = $request->ape_nom;
            $usuario ->usu_user =$request->usu_user;
            $usuario ->save();
    }
   /* public function actualizar()
    {
            $usuario = Usuario::find(2);
            $usuario ->ape_nom = 'Tantalean Quispe, Pedro';
            $usuario ->usu_user = 'Pedrotantalean@gmail.com';
            $usuario ->save();
    }*/
    public function actualizar(Request $request)
    {
            $usuario = Usuario::find(2);
            $usuario ->ape_nom = $request->ape_nom;
            $usuario ->usu_user = $request->usu_user;
            $usuario ->save();
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
