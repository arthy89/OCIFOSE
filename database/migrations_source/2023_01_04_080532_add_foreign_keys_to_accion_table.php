<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accion', function (Blueprint $table) {
            $table->foreign(['id_est'], 'fk_est')->references(['id_est'])->on('estado');
            $table->foreign(['id_user'], 'fk_user_a')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accion', function (Blueprint $table) {
            $table->dropForeign('fk_est');
            $table->dropForeign('fk_user_a');
        });
    }
};
