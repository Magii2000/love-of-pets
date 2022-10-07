<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;
use Illuminate\Support\Facades\DB;


class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $veterinarios=Veterinario::paginate(6);;
    
      return view ('veterinarios.index', ['veterinarios'=>$veterinarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veterinarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {    DB::insert('insert into veterinarios(nombre, especialidad, direccion, horario, telefono) values(?,?,?,?,?)', 
  [
    $request->nombre, $request->especialidad, $request->direccion, $request->horario, $request->telefono
    ]);

return redirect('veterinarios');


   
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
        
        $veterinario = Veterinario::find($id);
        return view('veterinarios.edit', ['veterinario' => $veterinario]);
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
        $veterinario = Veterinario::find($id);
          
        $veterinario->nombre = $request->nombre;  
        $veterinario->especialidad = $request->especialidad;
        $veterinario->direccion = $request->direccion;  
        $veterinario->horario = $request->horario;
       $veterinario->telefono = $request->telefono;
    
        $veterinario->save();

        return redirect('veterinarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Veterinario::destroy($id);
        return redirect("veterinarios");
    }
}
