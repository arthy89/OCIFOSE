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
        Schema::table('informe', function (Blueprint $table) {
            $table->foreign(['id_user'], 'fk_user_inf')->references(['id'])->on('users');
            $table->foreign(['id_rr'], 'fk_rr_inf')->references(['id_rr'])->on('reg_remitente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informe', function (Blueprint $table) {
            $table->dropForeign('fk_user_inf');
            $table->dropForeign('fk_rr_inf');
        });
    }
};
