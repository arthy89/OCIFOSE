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
        Schema::table('fose', function (Blueprint $table) {
            $table->foreign(['id_ofi'], 'fk_fose_ofi')->references(['id_ofi'])->on('oficio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fose', function (Blueprint $table) {
            $table->dropForeign('fk_fose_ofi');
        });
    }
};
