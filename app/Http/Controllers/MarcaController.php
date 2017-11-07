<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrearMarcasRequest;
use App\Http\Requests\EditarMarcasRequest;
use App\Marca;

class MarcaController extends Controller
{
    public function create(){
      return view('marcas.createMarca');
    }

    public function store(CrearMarcasRequest $request) {
      $marca = Marca::create($request->all());
      return redirect('/marcas/create');
      }

    public function edit($id){
      return view('marcas.editMarca', ['marca' => Marca::find($id)]);
    }

    public function update(EditarMarcasRequest $request, $id){
      $marca = Marca::find($id);
      $marca->fill($request->all());
      $marca->save();

      return redirect('marcas');
    }

    public function destroy($id){
      $marca = Marca::find($id);
      $marca->delete();

      return redirect('marcas');
    }

    public function index(){
      $marcas = Marca::all();

      return view('marcas.indexMarca', ['marc' => $marcas]);
    }
}
