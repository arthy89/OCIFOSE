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
        Schema::table('reg_remitente', function (Blueprint $table) {
            $table->foreign(['id_rem'], 'fk_rem')->references(['id_rem'])->on('remitente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reg_remitente', function (Blueprint $table) {
            $table->dropForeign('fk_rem');
            $table->dropForeign('fk_doc');
            $table->dropForeign('fk_ori');
        });
    }
};
