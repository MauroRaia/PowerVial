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
      return view ('/inventario');
  }
  public function proveedoresNav()
  {
      return view ('/proveedoresNav');
  }

  public function familiasNav(){
    return view ('/familiasNav');
  }

  public function marcasNav(){
    return view ('/marcasNav');
  }

  public function editElement(){
    return view ('/editElements');
  }
}
