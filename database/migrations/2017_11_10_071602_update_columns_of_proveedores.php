<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnsOfProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proveedores', function (Blueprint $table) {
            $table->string('telefono', 30)->nullable()->change();
            $table->string('movil', 30)->nullable()->change();
            $table->string('fax', 20)->nullable()->change();
            $table->string('direccion_web', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proveedores', function (Blueprint $table) {
            $table->string('telefono')->change();
            $table->string('movil')->change();
            $table->string('fax')->change();
            $table->string('direccion_web')->change();
        });
    }
}
