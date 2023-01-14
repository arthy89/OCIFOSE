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
        Schema::table('reporte', function (Blueprint $table) {
            $table->foreign(['id_rr'], 'fk_rr')->references(['id_rr'])->on('reg_remitente');
            $table->foreign(['id_acc'], 'fk_acc')->references(['id_acc'])->on('accion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reporte', function (Blueprint $table) {
            $table->dropForeign('fk_rr');
            $table->dropForeign('fk_acc');
        });
    }
};
