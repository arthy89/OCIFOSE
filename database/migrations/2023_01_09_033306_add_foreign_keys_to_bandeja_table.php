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
        Schema::table('bandeja', function (Blueprint $table) {
            $table->foreign(['id_est'], 'fk_est_b')->references(['id_est'])->on('estado');
            $table->foreign(['id_rr'], 'fk_rr_b')->references(['id_rr'])->on('reg_remitente');
            $table->foreign(['id_user'], 'fk_user_b')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bandeja', function (Blueprint $table) {
            $table->dropForeign('fk_est_b');
            $table->dropForeign('fk_rr_b');
            $table->dropForeign('fk_user_b');
        });
    }
};
