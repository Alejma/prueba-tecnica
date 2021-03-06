<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['tareas']=Tarea::paginate(5);
        return view('tarea.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tarea.create');
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
        $campos=[
            'Nombre'=>'required|string|max:100',
            'FechaDeInicio'=>'required|date',
            'FechaFin'=>'required|date',
            'Estado'=>'required|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido'

        ];
        $this->validate($request, $campos, $mensaje);
        /* $datosTarea = $request->all(); */
        $datosTarea = $request->except('_token');
        Tarea::insert($datosTarea);

        /* return response()->json($datosTarea); */
        return redirect('tarea')->with('mensaje', 'Tarea agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tarea=Tarea::findOrFail($id);

        return view('tarea.edit', compact('tarea') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        
        

        $datosTarea = request()->except(['_token','_method']);
        Tarea::where('id','=',$id)->update($datosTarea);

        $tarea=Tarea::findOrFail($id);
        /* return view('tarea.edit', compact('tarea') ); */

        return redirect('tarea')->with('mensaje','Tarea Modificada');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Tarea::destroy($id);
        

        return redirect('tarea')->with('mensaje','Tarea Borrada');
    }

   
}
