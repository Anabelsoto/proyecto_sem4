<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedores = Proveedor::all();
     
        return view('proveedor')->with('proveedor',$proveedores);
    }
     public function insertar()
    {
            $proveedor = new Proveedor();
            $proveedor ->RUC = '20406525689';
            $proveedor ->numero = '01-23568';
            $proveedor ->celular = '963258417';
            $proveedor ->direccion = 'Jr. el sol 4556';
            $proveedor ->save();
    }
    public function actualizar()
    {
            $proveedor = Proveedor::find(1);
            $proveedor ->RUC = '20406525189';
            $proveedor ->numero = '01-23568';
            $proveedor ->celular = '963288417';
            $proveedor ->direccion = 'Jr. el sol 4556';
            $proveedor ->save();
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
