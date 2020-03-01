<?php

namespace App\Http\Controllers;

use App\Producto as Producto;
use App\Http\Resources\Producto as RProducto;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view("tienda.gestionar.productos.index", compact ("productos"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tienda.gestionar.productos.edit");
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
        echo "<h1>Store</h1>";

        $p = new Producto();
        $p->cod=$request->cod;
        $p->nombre=$request->nombre;
        $p->nombre_corto=$request->nombre_corto;
        $p->descripcion=$request->descripcion;
        $p->PVP=$request->PVP;
        $p->familia=$request->familia;

        $p->save();
        $productos = Producto::all();
        return view("tienda.gestionar.productos.index", compact('productos'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('tienda.productos.producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete ();
        $productos = Producto::all();
        return view("tienda.gestionar.productos.index", compact('productos'));
        //
    }
}
