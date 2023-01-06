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
        Schema::create('bandeja', function (Blueprint $table) {
            $table->increments('id_ban');
            $table->integer('id_rr')->nullable()->index('fk_rr_b');
            $table->integer('id_est')->nullable()->index('fk_est_b');
            $table->string('ban_fec_in')->nullable();
            $table->string('ban_hor_in')->nullable();
            $table->string('ban_fec_sal')->nullable();
            $table->string('ban_hor_sal')->nullable();
            $table->string('ban_notas')->nullable();
            $table->integer('id_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandeja');
    }
};
