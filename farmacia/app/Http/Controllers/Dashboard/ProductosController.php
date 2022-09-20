<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductosPost;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Productos::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('dashboard.productos.index',['productos'=> $productos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductosPost $request)
    {
        Productos::create($request->validated());
        return redirect('productos/create')->with('status', 'Muchas gracias, el producto ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {
        echo view('dashboard.productos.show', ["productos"=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $producto)
    {
        echo view ('dashboard.productos.edit',['producto'=>$producto]); /* se cambia el modelo */

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductosPost $request, Productos $producto)
    {
        $producto->update($request->validated());
        return back()->with('status', 'Fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        $productos->delete();
        return back()->with('status','borrado exitosamente');
    }
}
