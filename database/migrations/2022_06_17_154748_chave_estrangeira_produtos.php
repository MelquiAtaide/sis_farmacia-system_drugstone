<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChaveEstrangeiraProdutos extends Migration
{

    public function up() {
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id')->change();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }


    public function down() {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
        });
    }
};
