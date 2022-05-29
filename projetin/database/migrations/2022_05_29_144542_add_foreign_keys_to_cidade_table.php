<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cidade', function (Blueprint $table) {
            $table->foreign(['estado'], 'cidade_ibfk_2')->references(['sigla'])->on('estados');
            $table->foreign(['estado'], 'cidade_ibfk_1')->references(['sigla'])->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cidade', function (Blueprint $table) {
            $table->dropForeign('cidade_ibfk_2');
            $table->dropForeign('cidade_ibfk_1');
        });
    }
}
