<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\CrearFamiliaRequest;
use App\Http\Request\EditarFamiliaRequest;
use App\Familia;

class FamiliaController extends Controller
{
    public function create(){
      return view('familia.createFamilia');
    }

    public function store(CrearFamiliaRequest $request){
      $familia = Familia::create($request->all());

      return redirect('/inventario');
    }

    public function edit($id){
      return view('familia.editFamilia', ['familia' => Familia::find($id)]);
    }

    public function update(EditarFamiliaRequest $request, $id){
      $familia = Familia::find($id);
      $familia->fill($request -> all());

      return redirect('/inventario');
    }

    public function destroy($id){
      $familia = Familia::find($id);
      $familia->delete();

      return redirect('/inventario');
    }
}
