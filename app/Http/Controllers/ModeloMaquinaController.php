<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloMaquinaController extends Controller
{
  public function create(){
    return view('modelosMaquina.createModeloMaquina');
  }

  public function store(CrearModeloMaquinaRequest $request) {
    $modelo = ModeloMaquina::create($request->all());

    Session::flash('success', 'El modelo se ha creado correctamente');
    return redirect('/modelosMaquina/create');
    }

  public function edit($id){
    return view('modelosMaquina.editModeloMaquina', ['modeloMaquina' => ModeloMaquina::find($id)]);
  }

  public function update(EditarModeloMaquinaRequest $request, $id){
    $modeloMaquina = ModeloMaquina::find($id);
    $modeloMaquina->fill($request->all());
    $modeloMaquina->save();

    Session::flash('success', 'El modelo se ha actualizado correctamente');
    return redirect('modelosMaquina');
  }

  public function destroy($id){
    $modeloMaquina = ModeloMaquina::find($id);
    $modeloMaquina->delete();

    return redirect('modelosMaquina');
  }

  public function index(){
    $modelosMaquina = ModeloMaquina::all();

    return view('modelosMaquina.indexModeloMaquina', ['model' => $modelosMaquina]);
  }
}
