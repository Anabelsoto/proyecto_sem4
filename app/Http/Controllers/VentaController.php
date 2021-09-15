<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;


class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventas = Venta::all();
        return view ('venta')->with('ventas',$ventas);
    }
    /*public function insertar()
    {
            $venta = new Venta();
            $venta ->serie = '001';
            $venta ->num_correl = '5';
            $venta ->fecha_emi = '2021-09-05';
            
            $total1=118;
            $sub_total1=$total1/1.18;
            $igvtotal1=$sub_total1*.18;

            $venta ->igv_total = $igvtotal1;
            $venta ->sub_total = $sub_total1;
            $venta ->total = $total1;
            $venta ->save();
    }*/
    public function insertar(Request $request)
    {
            $venta = new Venta();
            $venta ->serie = $request->serie;
            $venta ->num_correl =$request->num_correl;
            $venta ->fecha_emi =$request->fecha_emi;
            
            $total1=$request->total;
            $sub_total1=$total1/1.18;
            $igvtotal1=$sub_total1*.18;

            $venta ->igv_total =$igvtotal1;
            $venta ->sub_total =$sub_total1;
            $venta ->total = $total1;
            $venta ->save();
    }
   /* public function actualizar()
    {
            $venta = Venta::find(2);
            $venta ->serie = '001';
            $venta ->num_correl = '5';
            $venta ->fecha_emi = '2021-09-05';
            
            $total1=1800;
            $sub_total1=$total1/1.18;
            $igvtotal1=$sub_total1*.18;

            $venta ->igv_total = $igvtotal1;
            $venta ->sub_total = $sub_total1;
            $venta ->total = $total1;
            $venta ->save();
    }*/
    public function actualizar(request $request)
    {
            $venta = Venta::find(2);
            $venta ->serie = $request->serie;
            $venta ->num_correl = $request->num_correl;
            $venta ->fecha_emi = $request->fecha_emi;
            
            $total1=$request->total;
            $sub_total1=$total1/1.18;
            $igvtotal1=$sub_total1*.18;

            $venta ->igv_total = $igvtotal1;
            $venta ->sub_total = $sub_total1;
            $venta ->total = $total1;
            $venta ->save();
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
