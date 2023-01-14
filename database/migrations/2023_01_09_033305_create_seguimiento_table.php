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
        Schema::create('seguimiento', function (Blueprint $table) {
            $table->increments('id_seg');
            $table->string('seg_fec_in')->nullable();
            $table->string('seg_hor_in')->nullable();
            $table->string('seg_fec_sa')->nullable();
            $table->string('seg_hor_sa')->nullable();
            $table->integer('id_est')->nullable()->index('fk_est_s');
            $table->string('seg_nota')->nullable();
            $table->integer('id_user')->nullable();

            $table->index(['id_seg'], 'id_seg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimiento');
    }
};
