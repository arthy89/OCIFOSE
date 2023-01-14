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
        Schema::create('reg_remitente', function (Blueprint $table) {
            $table->increments('id_rr');
            $table->string('rem_exp')->nullable();
            $table->integer('id_rem')->nullable()->index('fk_rem');
            $table->string('rr_ori')->nullable();
            $table->string('rr_asunto')->nullable();
            $table->string('rr_detalle')->nullable();
            $table->string('rr_fec')->nullable();
            $table->string('rr_hor')->nullable();
            $table->string('rr_ref')->nullable();
            $table->string('rr_fols')->nullable();
            $table->string('rr_adj')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reg_remitente');
    }
};
