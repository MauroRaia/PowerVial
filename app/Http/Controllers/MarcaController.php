<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrearMarcasRequest;
use App\Http\Requests\EditarMarcasRequest;
use App\Marca;

class MarcaController extends Controller
{
    public function create($request){
      return view('marca.createMarca');
    }

    public function store(CrearMarcasRequest $request) {
      $marca = Marca::create($request->all());

      }

    public function edit($id){
      return view('marca.editMarca', ['marca' => Marca::find($id)]);
    }

    public function update(EditarMarcasRequest $request, $id){
      $marca = Marca::find($id);
      $marca->fill($request->all());
      $marca->save();

      return redirect('inventario');
    }

    public function destroy($id){
      $marca = Marca::find($id);
      $marca=>delete();

      return redirect('inventario');
    }
}
