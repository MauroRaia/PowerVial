<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrearFamiliaRequest;
use App\Http\Requests\EditarFamiliaRequest;
use App\Familia;

class FamiliaController extends Controller
{
    public function create(){
      return view('familias.createFamilia');
    }

    public function store(CrearFamiliaRequest $request){
      $familia = Familia::create($request->all());

      return redirect('/familias/create');
    }

    public function edit($id){
      return view('familias.editFamilia', ['familia' => Familia::find($id)]);
    }

    public function update(EditarFamiliaRequest $request, $id){
      $familia = Familia::find($id);
      $familia->fill($request->all());
      $familia->save();

      return redirect('/familias/create');
    }

    public function destroy($id){
      $familia = Familia::find($id);
      $familia->delete();

      return redirect('/inventario');
    }
    public function index(){
      $familias_all = Familia::all();
      return view('familias.indexFamilia', ['fam' => $familias_all]);
    }

    public function show($id){

      return view('familias.showFamilia', ['familia' => Familia::find($id)]);
    }
}
