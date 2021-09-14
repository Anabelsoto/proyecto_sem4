<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra_detalle;

class Compra_detalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compraDeta = Compra_detalle::all();
        return view('compra_detalle')->with('compraAna',$compraDeta);
    }
   /* public function insertar()
    {
            $compra_detalle = new Compra_detalle();
            $compra_detalle ->idcompra = '1';
            $compra_detalle ->idproducto = '2';
            $compra_detalle ->descripcion = 'calidad superior';

             $precio = 125;
            $cantidad =3;
            $total1=$precio*$cantidad;

            $compra_detalle ->precio = $precio;
            $compra_detalle ->cantidad = $cantidad;
            $compra_detalle ->total = $total1;
            $compra_detalle ->save();
    }*/
    public function insertar(Request $request)
    {
            $compra_detalle = new Compra_detalle();
            $compra_detalle ->idcompra =$request->idcompra;
            $compra_detalle ->idproducto = $request->idproducto;
            $compra_detalle ->descripcion = $request->descripcion;

            $precio =$request->precio;
            $cantidad =$request->cantidad;
            $total1=$precio*$cantidad;

            $compra_detalle ->precio = $precio;
            $compra_detalle ->cantidad = $cantidad;
            $compra_detalle ->total = $total1;
            $compra_detalle ->save();
    }
    public function actualizar()
    {
            $compra_detalle = Compra_detalle::find(4);
            $compra_detalle ->idcompra = '1';
            $compra_detalle ->idproducto = '2';
            $compra_detalle ->descripcion = 'calidad Premium';

            $precio = 129;
            $cantidad =2;
            $total1=$precio*$cantidad;

            $compra_detalle ->precio = $precio;
            $compra_detalle ->cantidad = $cantidad;
            $compra_detalle ->total = $total1;
            $compra_detalle ->save();
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
