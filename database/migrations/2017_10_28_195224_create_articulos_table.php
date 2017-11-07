<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articulos', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('codigo', 30);
          $table->string('nombre', 75);
          $table->text('descripcion');
          $table->integer('categoria');
          $table->integer('stock');
          $table->integer('proveedor_id')->unsigned();
          $table->integer('marca_id')->unsigned();
          $table->integer('familia_id')->unsigned();
          $table->integer('subfamilia_id')->unsigned();

          $table->foreign('proveedor_id')->references('id')->on('proveedores');
          $table->foreign('subfamilia_id')->references('id')->on('subfamilias');
          $table->foreign('marca_id')->references('id')->on('marcas');
          $table->foreign('familia_id')->references('id')->on('familias');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
