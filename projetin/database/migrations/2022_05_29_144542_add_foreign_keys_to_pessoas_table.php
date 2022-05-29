<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoas', function (Blueprint $table) {
            $table->foreign(['cidade'], 'pessoas_ibfk_2')->references(['cep'])->on('cidade');
            $table->foreign(['produto'], 'pessoas_ibfk_1')->references(['codigo'])->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoas', function (Blueprint $table) {
            $table->dropForeign('pessoas_ibfk_2');
            $table->dropForeign('pessoas_ibfk_1');
        });
    }
}
