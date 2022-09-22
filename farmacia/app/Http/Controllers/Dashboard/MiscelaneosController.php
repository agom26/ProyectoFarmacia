<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMiscelaneosPost;
use App\Models\Miscelaneos;
use Illuminate\Http\Request;

class MiscelaneosController extends Controller
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
        $miscelaneo=Miscelaneos::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('dashboard.miscelaneos.index',['miscelaneos'=> $miscelaneo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.miscelaneos.create',["miscelaneo"=> new Miscelaneos()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMiscelaneosPost $request)
    {
        Miscelaneos::create($request->validated());
        return redirect('miscelaneos/create')->with('status', 'Muchas gracias, el miscelaneos ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miscelaneos  $miscelaneos
     * @return \Illuminate\Http\Response
     */
    public function show(Miscelaneos $miscelaneo)
    {
        echo view('dashboard.miscelaneos.show', ["miscelaneo"=>$miscelaneo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miscelaneos  $miscelaneos
     * @return \Illuminate\Http\Response
     */
    public function edit(Miscelaneos $miscelaneo)
    {
        echo view ('dashboard.miscelaneos.edit',['miscelaneo'=>$miscelaneo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miscelaneos  $miscelaneos
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMiscelaneosPost $request, Miscelaneos $miscelaneo)
    {
        $miscelaneo->update($request->validated());
        return back()->with('status', 'Fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miscelaneos  $miscelaneos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscelaneos $miscelaneo)
    {
        $miscelaneo->delete();
        return back()->with('status','borrado exitosamente');
    }
}
