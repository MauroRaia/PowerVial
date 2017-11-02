<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrearProveedorRequest;
use App\Http\Requests\EditarProveedorRequest;
use App\Proveedor;

class ProveedorController extends Controller
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
        $tipos_identificacion_fiscal = ['cuit' => 'CUIT', 'cuil' => 'CUIL'];
        return view('proveedores.createProveedor', ['tipos_identificacion_fiscal' => $tipos_identificacion_fiscal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearProveedorRequest $request)
    {
        $proveedor = Proveedor::create($request->all());

        return redirect('/proveedores/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('proveedores.showProveedor', ['proveedor' => Proveedor::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipos_identificacion_fiscal = ['cuit' => 'CUIT', 'cuil' => 'CUIL'];
        return view('proveedores.editProveedor', ['proveedor' => Proveedor::find($id), 'tipos_identificacion_fiscal' => $tipos_identificacion_fiscal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarProveedorRequest $request, $id)
    {
      $proveedor = Proveedor::find($id);
      $proveedor->fill($request->all());
      $proveedor->save();

      return redirect('inventario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $proveedor = Proveedor::find($id);
      $proveedor->delete();

      return redirect('inventario');
    }
}
