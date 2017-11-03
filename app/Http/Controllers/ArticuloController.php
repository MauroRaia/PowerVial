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
use Illuminate\Support\Facades\Schema;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $filtro = ['nombre' => 'Nombre',
                 'familia_id' => 'Familia',
                 'codigo' => 'Codigo'
                ];

      $articulos = Articulo::all();
      return view('articulos.indexArticulo', ['art' => $articulos, 'filtro' => $filtro]);
    }


    public function find(Request $request)
    {
      $filtro = ['nombre' => 'Nombre',
                 'familia_id' => 'Familia',
                 'codigo' => 'Codigo'
                ];

      if (($request->input('field')) == 'familia_id') {
        $value = Familia::where('nombre', ($request->input('value')) )->first();
        $field = $request->input('field');

        $articulos = Articulo::where($field, $value->id)->get();

        return view('articulos.indexArticulo', ['art' => $articulos, 'filtro' => $filtro]);
      }

      $field = $request->input('field');
      $value = $request->input('value');
      $articulos = Articulo::where($field, $value)->get();

      return view('articulos.indexArticulo', ['art' => $articulos, 'filtro' => $filtro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familias = Familia::pluck('nombre','id');
        $proveedores = Proveedor::pluck('nombre_comercial','id');
        $marcas = Marca::pluck('nombre','id');
        $subfamilias = SubFamilia::pluck('nombre', 'id');



        return view('articulos.createArticulo', ['proveedores' => $proveedores,
                                                'familias' => $familias,
                                                'marcas' => $marcas,
                                                'subfamilias' => $subfamilias]);
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
