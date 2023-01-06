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
        Schema::table('oficio', function (Blueprint $table) {
            $table->foreign(['id_repo'], 'fk_ofi_repo')->references(['id_repo'])->on('reporte');
            $table->foreign(['id_inf'], 'fk_ofi_inf')->references(['id_inf'])->on('informe');
            $table->foreign(['id_user'], 'fk_user_o')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oficio', function (Blueprint $table) {
            $table->dropForeign('fk_ofi_repo');
            $table->dropForeign('fk_ofi_inf');
            $table->dropForeign('fk_user_o');
        });
    }
};
