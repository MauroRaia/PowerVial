<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrearSubfamiliaRequest;
use App\Http\Requests\EditarSubfamiliaRequest;
use App\SubFamilia;
use App\Familia;

class SubfamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familias = Familia::pluck('nombre', 'id');

        return view('subfamilias.createSubfamilia', ['familias' => $familias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearSubfamiliaRequest $request)
    {
      $subfamilia = Subfamilia::create($request->all());

      return redirect('/subfamilias/create');
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
        $familias = Familia::pluck('nombre', 'id');
        return view('subfamilias.editSubfamilia', ['subfamilia' => Subfamilia::findOrFail($id), 'familias' => $familias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarSubfamiliaRequest $request, $id)
    {
      $subfamilia = Subfamilia::find($id);
      $subfamilia->fill($request->all());
      $subfamilia->save();

      return redirect('/subfamilias/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $subfamilia = Subfamilia::find($id);
      $subfamilia->delete();
    }
}
