<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrearArticuloRequest;
use App\Http\Requests\EditarArticuloRequest;
use App\Articulo;
use App\Familia;
use App\Proveedor;
use App\SubFamilia;
use App\Marca;

class ArticuloController extends Controller
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
        $proveedores = Proveedor::pluck('nombre_comercial','id');
        $familias = Familia::pluck('nombre', 'id');
        $subfamilias = SubFamilia::pluck('nombre', 'id');
        $marcas = Marca::pluck('nombre', 'id');


        return view('articulos.createArticulo', ['proveedores' => $proveedores,
                                                'familias' => $familias,
                                                'subfamilias' => $subfamilias,
                                                'marcas' => $marcas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearArticuloRequest $request)
    {
      $articulo = Articulo::create($request->all());

      return redirect('/articulos/create');
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
      $proveedores = Proveedor::pluck('nombre_comercial','id');
      $familias = Familia::pluck('nombre', 'id');
      $subfamilias = SubFamilia::pluck('nombre', 'id');
      $marcas = Marca::pluck('nombre', 'id');
      $articulo = Articulo::findOrFail($id);
      return view('articulos.editArticulo', ['articulo' => $articulo,
                                             'proveedores' => $proveedores,
                                             'subfamilias' => $subfamilias,
                                             'familias' => $familias,
                                             'marcas' => $marcas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarArticuloRequest $request, $id)
    {
      $articulo = Articulo::find($id);
      $articulo->fill($request->all());
      $articulo->save();

      return redirect('/articulos/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $articulo = Articulo::find($id);
      $articulo->delete();
    }

    public function descontarStock($id, $cantidad){

      //$articulo = Articulo::find($id);
      //$stockActual = $articulo->stock;
      //$articulo->stock = $stockActual - $cantidad;
      //$articulo->save();
    }


}
