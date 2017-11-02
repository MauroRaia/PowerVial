<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Familia;
use App\Proveedor;
use App\SubFamilia;
use App\Marca;

class PagesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function main()
  {
      return view ('main');
  }
  public function inventario()
  {
      $proveedores = Proveedor::pluck('nombre_comercial','id');
      $familias = Familia::pluck('nombre', 'id');
      $subfamilias = SubFamilia::pluck('nombre', 'id');
      $marcas = Marca::pluck('nombre', 'id');
      return view ('itemView/inventario', ['proveedores' => $proveedores,
                                              'familias' => $familias,
                                              'subfamilias' => $subfamilias,
                                              'marcas' => $marcas]);
  }
  public function proveedores()
  {
      return view ('pages/providerFolder/proveedores');
  }
}
