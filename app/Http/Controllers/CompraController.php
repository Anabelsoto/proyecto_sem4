<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compras = compra::all();
        return view('compra')->with('comprasA',$compras);

    }
    public function insertar()
    {
            $compra = new Compra();
            $compra ->serie = '001';
            $compra ->num_correl = '5';
            $compra ->fecha_rec = '2021-09-05';

            $total=1180;
            $sub_tot=$total/1.18;
            $igv=$sub_tot*0.18;

            $compra ->igv_total = $igv;
            $compra ->sub_total = $sub_tot;
            $compra ->total = $total;
            $compra ->save();
    }
    public function actualizar()
    {
            $compra = Compra::find(1);
            $compra ->serie = '001';
            $compra ->num_correl = '5';
            $compra ->fecha_rec = '2021-09-05';

             $total=1180;
            $sub_tot=$total/1.18;
            $igv=$sub_tot*0.18;

            $compra ->igv_total = $igv;
            $compra ->sub_total = $sub_tot;
            $compra ->total = $total;
            $compra ->save();
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
