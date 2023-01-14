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
        Schema::table('consulta', function (Blueprint $table) {
            $table->foreign(['id_rr'], 'fk_rr_c')->references(['id_rr'])->on('reg_remitente');
            $table->foreign(['id_seg'], 'fk_seg_c')->references(['id_seg'])->on('seguimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consulta', function (Blueprint $table) {
            $table->dropForeign('fk_rr_c');
            $table->dropForeign('fk_seg_c');
        });
    }
};
