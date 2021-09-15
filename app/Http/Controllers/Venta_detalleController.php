<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta_detalle;
class Venta_detalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $VentaDeta = Venta_detalle::all();
        return view ('venta_detalle')->with('venta_Anabel',$VentaDeta);
    }
    /*public function insertar()
    {
            $venta_detalle = new Venta_detalle();
            $venta_detalle ->idventa = '1';
            $venta_detalle ->idproducto = '2';
            $venta_detalle ->descripcion = 'calidad superior B';

            $precio1=185;
            $cantidad1=3;
            $total1=$precio1*$cantidad1;


            $venta_detalle ->precio = $precio1;
            $venta_detalle ->cantidad = $cantidad1;
            $venta_detalle ->total = $total1;
            $venta_detalle ->save();
    }*/
    public function insertar(Request $request)
    {
            $venta_detalle = new Venta_detalle();
            $venta_detalle ->idventa =$request->idventa;
            $venta_detalle ->idproducto =$request->idproducto;
            $venta_detalle ->descripcion =$request->descripcion;

            $precio1=$request->precio;
            $cantidad1=$request->cantidad;
            $total1=$precio1*$cantidad1;


            $venta_detalle ->precio = $precio1;
            $venta_detalle ->cantidad = $cantidad1;
            $venta_detalle ->total = $total1;
            $venta_detalle ->save();
    }
    public function actualizar(Request $request)
    {
            $venta_detalle = Venta_detalle::find(6);
            $venta_detalle ->idventa =$request->idventa;
            $venta_detalle ->idproducto =$request->idproducto;
            $venta_detalle ->descripcion = $request->descripcion;

            $precio1=$request->precio;
            $cantidad1=$request->cantidad;
            $total1=$precio1*$cantidad1;


            $venta_detalle ->precio = $precio1;
            $venta_detalle ->cantidad = $cantidad1;
            $venta_detalle ->total = $total1;
            $venta_detalle ->save();
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
