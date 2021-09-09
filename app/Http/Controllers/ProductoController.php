<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = producto::all();
        return view ('producto')->with('productos',$productos);
    }
    public function insertar()
    {
            $producto = new Producto();
            $producto ->marca = 'Sony';
            $producto ->modelo = '2BM';
            $producto ->descripcion = 'color rojo';
            $producto ->stock = '4';
            $producto ->precio = '250';
            $producto ->save();
    }
    public function actualizar()
    {
            $producto = Producto::find(1);
            $producto ->marca = 'Sony';
            $producto ->modelo = '2BM';
            $producto ->descripcion = 'color rojo';
            $producto ->stock = '4';
            $producto ->precio = '250';
            $producto ->save();
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
