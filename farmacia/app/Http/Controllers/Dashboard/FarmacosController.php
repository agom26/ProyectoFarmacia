<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFarmacosPost;
use App\Models\Farmacos;
use Illuminate\Http\Request;

class FarmacosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmaco=Farmacos::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('dashboard.farmacos.index',['farmacos'=> $farmaco]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.farmacos.create',["farmaco"=> new Farmacos()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFarmacosPost $request)
    {
        Farmacos::create($request->validated());
        return redirect('farmacos/create')->with('status', 'Muchas gracias, el farmaco ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farmacos  $farmacos
     * @return \Illuminate\Http\Response
     */
    public function show(Farmacos $farmaco)
    {
        echo view('dashboard.farmacos.show', ["farmaco"=>$farmaco]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmacos  $farmacos
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmacos $farmaco)
    {
        echo view ('dashboard.farmacos.edit',['farmaco'=>$farmaco]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Farmacos  $farmacos
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFarmacosPost $request, Farmacos $farmaco)
    {
        $farmaco->update($request->validated());
        return back()->with('status', 'Fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farmacos  $farmacos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmacos $farmaco)
    {
        $farmaco->delete();
        return back()->with('status','borrado exitosamente');
    }
}
