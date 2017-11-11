<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnsOfArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articulos', function (Blueprint $table) {
            $table->integer('subfamilia_id')->unsigned()->nullable()->change();
            $table->integer('categoria')->nullable()->change();
            $table->string('descripcion')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulos', function (Blueprint $table) {
            $table->integer('subfamilia_id')->unsigned()->change();
            $table->integer('categoria')->change();
            $table->string('descripcion')->change();
        });
    }
}
