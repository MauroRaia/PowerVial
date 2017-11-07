<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('proveedores', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('tipo_identificacion_fiscal');
          $table->biginteger('numero_identificacion_fiscal')->unsigned();
          $table->string('razon_social', 125);
          $table->string('nombre_comercial', 100);
          $table->string('domicilio', 100);
          $table->string('pais', 75);
          $table->string('provincia', 75);
          $table->string('localidad', 75);
          $table->integer('codigo_postal')->unsigned();
          $table->string('telefono', 30);
          $table->string('movil', 30);
          $table->string('fax', 20);
          $table->string('email', 75);
          $table->string('direccion_web', 50);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
